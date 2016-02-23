<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */

	include('header.php');
	
	echo "<div id='breadcrumbs'>";
		echo anchor(base_url(), 'Dashboard');
	echo "</div>";
	echo "<div id='content'>";
		echo heading("Company Profile", 1);
		echo "<div class='three-column'>";
			echo "<div>";
				echo "<p>Vet Rich Corporation began its operations on September 2, 2002, initially as distributor of the poultry line of Schering Plough. In 2003 it expanded its line into hogs by being distributor of Virbac and having found greater success and strength in hogs decided to withdraw from Virbac and instead sought an exclusive distributorship from Metrovet in 2005.</p>";
			echo "</div>";
			echo "<div>";
				echo "<p>The alliance became so successful that for fiscal year 2007-2008 Vet Rich was awarded by Metrovet as Distributor of the Year in Luzon in terms of sales growth. To date its main line of business continues with LNB (formely Metrovet), maintaining corollary businesses with Virbac which started it all for Vet Rich and with Vethealth which is a company owned by its President.</p>";
			echo "</div>";
			echo "<div>";
				echo heading("Mission", 2);
				echo ul(array("To be the Philippines’ most admired animal health company."));
			echo "</div>";
		echo "</div>";
	echo "</div>";
				
	include('footer.php');
?>