<?php
	/* Template: Granite
	 * Version: 1.0
	 * Author: Aletheia Grace del Rosario
	 */
			echo "</div>";
			echo "<div id='footer' class='center'>";
				// Automatic copyright year increment.
				$copyYear = 2012; 
				$curYear = date('Y'); 
				$year = $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
	
				echo "&copy; Vet Rich Corporation. " . $year . ". All rights reserved.";
			echo "</div>";
		echo "</body>";
	echo "</html>";
?>