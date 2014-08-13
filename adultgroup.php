<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Form</title>
	<meta name="Hoa" content="Hoa">
	<!-- Date: 2010-01-30 <link rel="stylesheet" type="text/css" href="CBHS_form.css" /> -->

	
	<style>
		.error {
			color: red;
		}
		.message {
			color: blue;
		}	
	</style>
	
<?php

//functions
function mysql_prep( $value ) {
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
	if( $new_enough_php ) { // PHP v4.3.0 or higher
		// undo any magic quote effects so mysql_real_escape_string can do the work
		if( $magic_quotes_active ) { $value = stripslashes( $value ); }
		$value = mysql_real_escape_string( $value );
	} else { // before PHP v4.3.0
		// if magic quotes aren't already on then add slashes manually
		if( !$magic_quotes_active ) { $value = addslashes( $value ); }
		// if magic quotes are active, then the slashes already exist
	}
	return $value;
}

//define constants
	// Database Constants
	define("DB_SERVER", "localhost");
	define("DB_USER", "ramsagent");
	define("DB_PASS", "r@ms@g3nt");
	define("DB_NAME", "change_agent");
	
	// 1. Create a database connection
	$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if (!$connection) {
		die("Database connection failed: " . mysql_error());
	}

	// 2. Select a database to use 
	$db_select = mysql_select_db(DB_NAME,$connection);
	if (!$db_select) {
		die("Database selection failed: " . mysql_error());
	}
	
	
//define variables
$fields = array("name" => "*", "address" => "*", "phone" => "*", "fax" => "", "website" => "", "services" => "*", "population" => "*", "eligibility" => "*", "languages" => "*",  "contact_person_name" => "*", "contact_person_number" => "*", "contact_person_email" => "", "change_agent_name" => "*", "change_agent_number" => "*", "change_agent_email" => "");


	$inserting_fields = "";
	$inserting_data = "";
	$errors = "";
	foreach($fields as $f => $v) {
		$$f = "";
		if (isset($_POST[$f])) {
			$$f = mysql_prep($_POST[$f]);

			if($v == "*" && $$f == "") {
				$errors .= $f . ", ";
			}

			$inserting_fields .= $f . ",";		
			$inserting_data .= "'". $$f. "',";
		}

	}

$inserting_fields = rtrim($inserting_fields, ",");
$inserting_data = rtrim($inserting_data, ",");

if (isset($_POST['submit'])) {
	
		if ($errors != "") {
			echo '<p class="error" >Error! ';
			echo rtrim($errors, ", ") . ' is required!</p>';
		} else {
	
			//3. query database
			$query = "INSERT INTO agencies (" . $inserting_fields . ")";
			$query .= "VALUES (" . $inserting_data . ")";

			$result = mysql_query($query, $connection);

			if ($result) {
				// Success!
				echo '<p class="message" >Entry creation succeeds.</p>';
			} else {
				// Display error message.
				echo '<p class="message" >Subject creation failed</p>';
				echo '<p class="message">' . mysql_error() . '</p>';
			}
	
			//4. Use return data
		}
}

	

?>



</head>
<body>
	<div id="content">
	<h1>CBHS Adult and older Adult Services Resource List:</h1>
	
			<form action="" method="post">

				    <label class="label" for="name">*Organization/Agency Name: </label><br>
				    	<input type="text" name ="name" id="name" size="70" value="<?php echo $name; ?>" /><br>
				
						<label class="label" for="address">*Address: </label><br>
							<input type="text" name="address" id="address" size="70" value="<?php echo $address; ?>" /><br>

						<label class="label" for="phone">*Phone (415)-xxx-xxxx: </label><br>
							<input type="text" name="phone" id="phone" size="30" maxlength="30" value="<?php echo $phone; ?>" /><br>	

						<label class="label" for="fax">Fax (415)-xxx-xxxx: </label><br>
							<input type="text" name="fax" id="fax" size="30" maxlength="30" value="<?php echo $fax; ?>" /><br>

						<label class="label" for="website">Website: </label><br>
							<input type="text" name="website" id="website" size="60" maxlength="100" value="<?php echo $website; ?>" /><br>
							
							
					
					<label class="label" for="services">*Services: </label><br>
						<textarea name="services" id="services" rows="10" cols="60"><?php echo $services; ?></textarea><br>
						
					<label class="label" for="population">*Population Served: </label><br>
						<textarea name="population" id="population" rows="10" cols="60"><?php echo $population; ?></textarea><br>
												
				    <label class="label" for="eligibility">*Eligibility criteria / Access Procedure: </label><br>
						<textarea name="eligibility" id="eligibility" rows="10" cols="60"><?php echo $eligibility; ?></textarea><br>
											
					<label class="label" for="languages">*Language Capability: </label><br>
						<textarea  name="languages" id="languages" rows="5" cols="60"><?php echo $languages; ?></textarea><br>


			
					
				    <label class="label" for="contact_person_name">*Contact Person Name: </label><br>
				    	<input type="text" name="contact_person_name"  id="contact_person_name" size="70" maxlength="100" value="<?php echo $contact_person_name; ?>" /><br>
				
					<label class="label" for="contact_person_number">*Contact Person Number (415)-xxx-xxxx Ext xxx: </label><br>
		    			<input type="text" name="contact_person_number" id="contact_person_number" size="30" maxlength="30" value="<?php echo $contact_person_number; ?>" /><br>
		
					<label class="label" for="contact_person_email">Contact Person Email: </label><br>
			    		<input type="text" name="contact_person_email" id="contact_person_email" size="30" maxlength="30" value="<?php echo $contact_person_email; ?>" /><br>
			
			
				    <label class="label" for="change_agent_name">*Change Agent Name: </label><br>
				    	<input type="text" name="change_agent_name" id="change_agent_name" size="70" maxlength="100" value="<?php echo $change_agent_name; ?>" /><br>

					<label class="label" for="change_agent_number">*Contact Person Number (415)-xxx-xxxx Ext xxx: </label><br>
		    			<input type="text" name="change_agent_number" id="change_agent_number" size="30" maxlength="30" value="<?php echo $change_agent_number; ?>" /><br>

					<label class="label" for="change_agent_email">Contact Person Email: </label><br>
			    		<input type="text" name="change_agent_email" id="change_agent_email" size="30" maxlength="30" value="<?php echo $change_agent_email; ?>" /><br>
				
				

				    <input type="submit" name="submit" value="send" /> 
					<!-- ><input type="reset" /> -->

			</form>
	</div>

</body>
<?php //5.Close database connection
mysql_close($connection); ?>
</html>
