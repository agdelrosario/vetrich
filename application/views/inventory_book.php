<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */

	include('header.php');
	
	echo "<div id='breadcrumbs'>";
		echo anchor('vetrich/inventory', 'Inventory');
		echo anchor('vetrich/inventory/booking', 'Booking');
		echo anchor('vetrich/inventory/booking/reserve', 'Reserve Product');
	echo "</div>";
	echo "<div id='sidebar'>";
		$sidebar = array(
				anchor(base_url() . "inventory/booking/reserve", "Reserve Product", array("id" => "active")),
				anchor(base_url() . "inventory/booking/2", "Link 2"),
				anchor(base_url() . "inventory/booking/3", "Link 3")
			);
		echo ul($sidebar);
		
		echo "<div id='description'>";
		echo "</div>";
	echo "</div>";
	echo "<div id='content' class='withsidebar'>";
		echo heading("Reserve Product", 1);
		
		$attributes = array("class" => "email", "id" => "myform");
		echo form_open("controller/function/variables", $attributes);
			echo form_fieldset("Customer Details");
				$this->table->add_row("Customer:", form_input("customer", ""));
				$this->table->add_row("Sales Representative:", form_input("sales_rep", ""));
				echo $this->table->generate();
			echo form_fieldset_close();
			
			$this->table->clear();
			
			$product_code = array();
			$product_code['-'] = "--------------";
			
			foreach ($query->result() as $row)
				$product_code[$row->id] = $row->code;
			
			echo form_fieldset("Product Details");
				$this->table->add_row("Product Code:", form_dropdown("prod_code", $product_code, "", "id='prod_code' onChange='if(this.value != \"-\") { retrieve_prod_name(this.value); clear_batch_num(); } else clear_all();'"));
				$this->table->add_row("Product Name:", "<div id='prod_name'>Please select a Product Code</div>");
				$this->table->add_row("Batch Number:", "<div id='batch_num'>Please select a Product Name</div>");
				$this->table->add_row("Selling Price:", form_input("selling_price", ""));
				$this->table->add_row("Quantity:", form_input("quantity", ""));
				$this->table->add_row("Unit:", form_input("unit", ""));
				echo $this->table->generate();
			echo form_fieldset_close();
			echo form_submit(array("name" => "submit", "value" => "Submit", "class" => "center"));
		echo form_close();
		
	echo "</div>";
				
	include('footer.php');
?>