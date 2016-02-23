<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */

	include('header.php');
	
	echo "<div id='breadcrumbs'>";
		echo anchor('vetrich/inventory', 'Inventory');
		echo anchor('vetrich/inventory/view', 'View');
		echo anchor('vetrich/inventory/view/summary', 'Product Summary');
	echo "</div>";
	echo "<div id='sidebar'>";
		$sidebar = array(
				anchor(base_url() . "inventory/add", "Add Product"),
				anchor(base_url() . "inventory/view", "View Products", array("id" => "active")),
				anchor(base_url() . "inventory/pending", "Pending Products"),
				anchor(base_url() . "inventory/expiring", "Expiring Products"),
				anchor(base_url() . "inventory/booking", "Booking")
			);
			
		echo ul($sidebar);
	echo "</div>";
	echo "<div id='content' class='withsidebar'>";
		echo heading("Product Summary", 1);
		echo "<p>This displays table usage. " . anchor(base_url(), "Testing") . " links.</p>";
		echo $this->table->set_heading('Sample', 'Sample', 'Sample', 'Sample', 'Actions');
		echo $this->table->add_row("Sample Text", "Sample Text", "Sample Text", "Sample Text", "<div id='actions'>" . anchor(base_url() . "#", img(base_url() . "images/file.png"), "title='View'") . " " . anchor(base_url() . "#", img(base_url() . "images/gears.png"), "title='Edit'") . " " . anchor(base_url() . "#", img(base_url() . "images/recycle.png"), "title='Delete'") . "</div>");
		echo $this->table->add_row("Sample Text", "Sample Text", "Sample Text", "Sample Text", "<div id='actions'>" . anchor(base_url() . "#", img(base_url() . "images/file.png"), "title='View'") . " " . anchor(base_url() . "#", img(base_url() . "images/gears.png"), "title='Edit'") . " " . anchor(base_url() . "#", img(base_url() . "images/recycle.png"), "title='Delete'") . "</div>");
		echo $this->table->add_row("Sample Text", "Sample Text", "Sample Text", "Sample Text", "<div id='actions'>" . anchor(base_url() . "#", img(base_url() . "images/file.png"), "title='View'") . " " . anchor(base_url() . "#", img(base_url() . "images/gears.png"), "title='Edit'") . " " . anchor(base_url() . "#", img(base_url() . "images/recycle.png"), "title='Delete'") . "</div>");
		echo $this->table->add_row("Sample Text", "Sample Text", "Sample Text", "Sample Text", "<div id='actions'>" . anchor(base_url() . "#", img(base_url() . "images/file.png"), "title='View'") . " " . anchor(base_url() . "#", img(base_url() . "images/gears.png"), "title='Edit'") . " " . anchor(base_url() . "#", img(base_url() . "images/recycle.png"), "title='Delete'") . "</div>");
		echo $this->table->add_row("Sample Text", "Sample Text", "Sample Text", "Sample Text", "<div id='actions'>" . anchor(base_url() . "#", img(base_url() . "images/file.png"), "title='View'") . " " . anchor(base_url() . "#", img(base_url() . "images/gears.png"), "title='Edit'") . " " . anchor(base_url() . "#", img(base_url() . "images/recycle.png"), "title='Delete'") . "</div>");
		echo $this->table->generate();
		
		echo "<div id='pagination'>";
			echo anchor(base_url(), "<<");
			echo anchor(base_url(), "<");
			echo anchor(base_url(), "1");
			echo anchor(base_url(), "2");
			echo anchor(base_url(), "3");
			echo anchor(base_url(), ">");
			echo anchor(base_url(), ">>");
		echo "</div>";
	echo "</div>";
				
	include('footer.php');
?>