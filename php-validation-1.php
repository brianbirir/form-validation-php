<?php
// define variables and initialize with empty values
$nameError = $emailError = $phoneError = "";
$userName = $userEmail = $userPhone = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Missing";
    }
    else {
        $name = $_POST["name"];
    }
 
    if (empty($_POST["email"])) {
        $emailError = "Missing";
    }
    else {
        $email = $_POST["email"];
    }
 
    if (empty($_POST["phone"]))  {
        $phoneError = "Missing";
    }
    else {
        $phone = $_POST["phone"];
    }
}

//Add database code here or just to do something with the form data

// Beginning of HTML code

?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Form Test </title>
</head>
<body>
	<form name="user-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<?php echo '<p>'.$nameError.'</p>'; ?>
		<label>Name</label>
		<input type="text" id="user-name" name="name">
		
		<?php echo '<p>'.$emailError.'</p>'; ?>
		<label>Email</label>
		<input type="email" id="user-email" name="email">
		
		<?php echo '<p>'.$phoneError.'</p>'; ?>
		<label>Phone No.</label>
		<input type="text" id="user-phone" name="phone">
 
		<input type="submit" value="Send" name="user-form-btn" id="user-form-btn">
	</form>
</body>
</html>
