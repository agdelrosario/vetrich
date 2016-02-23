<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */

	echo doctype();
	echo "<html>";
		echo "<head>";
			echo "<title>Vet Rich Corporation</title>";
			echo link_tag('css/basic.css');
			echo link_tag('css/ddsmoothmenu.css');
			
			echo "<script type='text/javascript' src='" . base_url() . "js/jquery.min.js'></script>
			<script type='text/javascript' src='" . base_url() . "js/ddsmoothmenu.js'></script>
			<script language='javascript' type='text/javascript' src='" . base_url() . "js/jquery.js'></script>
			<script language='javascript' type='text/javascript' src='" . base_url() . "js/db_retrieve.js'></script>
			
			<script type='text/javascript'>
				ddsmoothmenu.init({
					mainmenuid: 'smoothmenu1', //menu DIV id
					orientation: 'h', //Horizontal or vertical menu: Set to 'h' or 'v'
					classname: 'ddsmoothmenu', //class added to menu's outer DIV
					contentsource: 'markup' //'markup' or ['container_id', 'path_to_menu_file']
				});
			</script>";
		echo "</head>";
		
		echo "<body>";
			echo "<div id='masthead' class='center'>";
				echo img(base_url() . 'images/logo2.png');
				echo "<div id='smoothmenu1' class='ddsmoothmenu'>";
					// Main Navigation.
					$inventory_booking = array(
							anchor(base_url() . "inventory/booking/#", "Item 1"),
							anchor(base_url() . "inventory/booking/#", "Item 2"),
							anchor(base_url() . "inventory/booking/#", "Item 3"),
							anchor(base_url() . "inventory/booking/#", "Item 4")
						);
					
					$inventory_view_supplier = array(
							anchor(base_url() . "inventory/view/supplier/#", "Item 1"),
							anchor(base_url() . "inventory/view/supplier/#", "Item 2"),
							anchor(base_url() . "inventory/view/supplier/#", "Item 3"),
							anchor(base_url() . "inventory/view/supplier/#", "Item 4")
						);
						
					$inventory_view = array(
							anchor(base_url() . "inventory/view/supplier", "View by Supplier") . ul($inventory_view_supplier),
							anchor(base_url() . "inventory/view/all", "View All"),
							anchor(base_url() . "inventory/view/summary", "View Product Summary")
						);
					
					$inventory = array(
							anchor(base_url() . "inventory/add", "Add Product"),
							anchor(base_url() . "inventory/view", "View") . ul($inventory_view),
							anchor(base_url() . "inventory/pending", "Pending Products"),
							anchor(base_url() . "inventory/expiring", "Expiring Products"),
							anchor(base_url() . "inventory/booking", "Booking") . ul($inventory_booking)
						);
						
					$folder3 = array(
							anchor(base_url() . "#", "Sub Item 3.1.1.1"),
							anchor(base_url() . "#", "Sub Item 3.1.1.2"),
							anchor(base_url() . "#", "Sub Item 3.1.1.3"),
							anchor(base_url() . "#", "Sub Item 3.1.1.4"),
							anchor(base_url() . "#", "Sub Item 3.1.1.5")
						);
					
					$mainnavigation = array(
							anchor(base_url(), "Dashboard"),
							anchor(base_url() . "inventory", "Inventory") . ul($inventory),
							anchor(base_url() . "supplier", "Supplier"),
							anchor(base_url() . "sales", "Sales"),
						);
						
					echo ul($mainnavigation);
					
					// User Navigation.
					$usernavigation_dropdown = array(
							anchor(base_url() . "account", "Account"),
							anchor(base_url() . "logout", "Logout")
						);
					
					$usernavigation = array(
							anchor(base_url() . "account", "username") . ul($usernavigation_dropdown)
						);
					
					echo ul($usernavigation, array("id" => "user"));
				echo "</div>";
					
					
				echo "</div>";
			echo "</div>";
			echo "<div id='main' class='center'>";
?>