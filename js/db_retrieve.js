function retrieve_prod_name (prod_code)
{
	$.ajax({                                      
		url: 'http://localhost/vetrich/js/db_request.php',
		data: 'id='+prod_code+'&type=prod_code',
		dataType: 'json',                //data format      
		success: function(rows)          //on recieve of reply
		{
			var options = '<option value=\'-\'>--------------</option>';
			for (var i in rows)
			{
			  var row = rows[i];
			  var vname = row[1];
			  options = options+'<option value=\''+vname+'\'>'+vname+'</option>';
			}
			
			if (options == '<option value=\'-\'>--------------</option>') $('#prod_name').html('<div id=\'sel_error\'>There is no Product Name corresponding to the given Product Code</div>');
			else $('#prod_name').html('<select name=\'prod_name\' onChange=\'if(this.value != \"-\") {retrieve_batch_num(this.value); retrieve_description(this.value); } else clear_batch_num(); \'>'+options+'</select>');
		}
	});
}

function retrieve_description(prod_name)
{
	$.ajax({                                      
		url: 'http://localhost/vetrich/js/db_request.php',
		data: 'id='+prod_name+'&type=description',
		dataType: 'json',                //data format      
		success: function(rows)          //on recieve of reply
		{
			$('#description').html("<h1>"+prod_name+"</h1><p>Current stock: "+rows[0]+"</p>");
		}
	});
}

function retrieve_batch_num (prod_name)
{
	$.ajax({                                      
		url: 'http://localhost/vetrich/js/db_request.php',
		data: 'id='+prod_name+'&type=prod_name',
		dataType: 'json',                //data format      
		success: function(rows)          //on recieve of reply
		{
			var options = '';
			for (var i in rows)
			{
			  var row = rows[i];

			  var id = row[0];
			  var vname = row[1];
			  
			  options = options+'<option value=\''+vname+'\'>'+vname+'</option>';
			}
			
			if (options == '') $('#batch_num').html('<div id=\'sel_error\'>There are no corresponding Batch Numbers for the  Product Code and Name given</div>');
			else $('#batch_num').html('<select name=\'batch_num\'>'+options+'</select>');
		}
	});
	
	$('#batch_num').html(prod_name);
}

function clear_all ()
{
	clear_prod_name();
	clear_batch_num();
}

function clear_prod_name ()
{
	$('#prod_name').html('Please select a Product Code');
}

function clear_batch_num ()
{
	$('#batch_num').html('Please select a Product Name');
}