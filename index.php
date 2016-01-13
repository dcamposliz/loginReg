<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
//if logged in redirect to members page
if( $user->is_logged_in() ) {
	header('Location: memberPage.php');
}







//if form has been submitted process it
if(isset($_POST['submit'])){

	if(strlen($_POST['username']) < 3) {
		$error[] = 'Username is too short';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row[username])){
			
		}
	}

}

	//very basic validation
	//email validation
	//if no errors have been created carry on
		//hash the password
		//create the activasion code
			//insert into database with a prepared statement
			//send email
			//redirect to index page
		//else catch the exception and show the error.


//define page title
$title = 'Demo';

//include header template
require('layout/header.php');

?>	

<?php
//check for any errors
if(isset($error)){
	foreach($error as $error){
		echo '<p class="bg-danger">'.$error.'</p>';
	}
}

//if action is joined show success
if(isset($_GET['action']) && $_GET['action'] == 'joined'){
	echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
}
?>

<!-- 
	for new registrations, display a form consisting of
	username, email, password, and confirm password 
-->

<form role="form" method="post" action="" autocomplete="off" >

	<!-- usename input -->
	<div class="form-group">
		<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
	</div>

	<!-- email input -->
	<div class="form-group">
		<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
	</div>

	<!-- password input -->
	<div class="row">
		<!-- 1/2 password input process -->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"tabindex="3">
			</div>
		</div>
		<!-- 2/2 password input process -->
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password"tabindex="4">
			</div>
		</div>
	</div>
	<!-- register input -->
	<div class="row">
		<div class="col-xs-6 col-sm-6">
			<input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5">
		</div>
	</div>
					<!--

			NOTES ON FORM

						This is a standard form, one thing to note 
						I make use of sticky forms which means if 
						their has been a validation error the fields 
						that have been filled out will be populated 
						again with the supplied data, except for 
						passwords. Username and email would be restored.

						This is done by doing an if statement, if the 
						array $error is set meaning it exists then 
						retrain the $_POST
					-->
</form>



