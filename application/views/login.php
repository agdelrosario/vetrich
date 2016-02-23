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
		echo "</head>";
		
		echo "<body>";
			echo "<div id='login' class='center'>";
				echo heading("Login", 1);
				echo form_open();
					
					$this->table->add_row(form_input("username", "Enter Username", "onFocus=\"if(this.value=='Enter Username') this.value='';\" onBlur=\"if (this.value=='') this.value='Enter Username'\""));
					$this->table->add_row(form_password("password", "Enter Password", "onFocus=\"if(this.value=='Enter Password') this.value='';\" onBlur=\"if (this.value=='') this.value='Enter Password'\""));
					$this->table->add_row(form_submit("submit", "Submit"));
					echo $this->table->generate();
				echo form_close();
			echo "</div>";
			echo "<div id='footer-login' class='center'>";
				// Automatic copyright year increment.
				$copyYear = 2012; 
				$curYear = date('Y'); 
				$year = $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
	
				echo "&copy; Vet Rich Corporation. " . $year . ". All rights reserved.";
			echo "</div>";
		echo "</body>";
	echo "</html>";
?>