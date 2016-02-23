<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */

	include('header.php');
	
	echo "<div id='breadcrumbs'>";
		echo anchor('vetrich/inventory', 'Inventory');
		echo anchor('vetrich/inventory/add', 'Add');
	echo "</div>";
	echo "<div id='sidebar'>";
		$sidebar = array(
				anchor(base_url() . "inventory/add", "Add Product", array("id" => "active")),
				anchor(base_url() . "inventory/view", "View Products"),
				anchor(base_url() . "inventory/pending", "Pending Products"),
				anchor(base_url() . "inventory/expiring", "Expiring Products"),
				anchor(base_url() . "inventory/booking", "Booking")
			);
			
		echo ul($sidebar);
	echo "</div>";
	echo "<div id='content' class='withsidebar'>";
		echo heading("Add Product", 1);
		
		echo form_open();
			echo form_fieldset("Product Details");
				$this->table->add_row("Product name:", form_input("name", ""));
				
				$months = array(
					"1" => "January",
					"2" => "February",
					"3" => "March",
					"4" => "April",
					"5" => "May",
					"6" => "June",
					"7" => "July",
					"8" => "August",
					"9" => "September",
					"10" => "October",
					"11" => "November",
					"12" => "December"
				);
				
				$years = array();
				for ($i = 2002; $i <= date('Y') + 10; $i++) $years[$i] = $i;
				
				$this->table->add_row("Expiration date:", form_dropdown("expiration_month", $months) . form_dropdown("expiration_year", $years));
				$this->table->add_row("Batch number:", form_input("batchno", ""));
				echo $this->table->generate();
			echo form_fieldset_close();
			
			$this->table->clear();
			
			echo form_fieldset("Purchase Details");
				$this->table->add_row("Beginning balance:", form_input("beginning_balance", ""));
				$this->table->add_row("Purchase order:", form_input("purchase_order", ""));
				$this->table->add_row("Returns:", form_input("returns", ""));
				$this->table->add_row("Sales:", anchor(base_url(), "0"));
				$this->table->add_row("End balance:", anchor(base_url(), "0"));
				$this->table->add_row("Unit Price:", form_input("unit_price", ""));
				$this->table->add_row("Amount:", anchor(base_url(), "0"));
				
				$supplier = array("1" => "LNB");
				
				$this->table->add_row("Supplier:", form_dropdown("supplier", $supplier));
				echo $this->table->generate();
			echo form_fieldset_close();
			echo form_submit(array("name" => "submit", "value" => "Submit", "class" => "center"));
		echo form_close();
		
	echo "</div>";
				
	include('footer.php');
?>