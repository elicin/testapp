<?php
//this is the file that the form.html submit button links to; this file is called the 'Backend script'

//do some process then redirect to another page
//save to database

header("Location: thank-you.php");
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);
?>



<!-- var_dump($_POST);

echo($_POST["fname"]); //$_POST is something that keeps all the info obtained via this way
echo($_POST["lname"]); 

if(!isset($_POST["acceptTerms"]){
	echo("acceptTerms not received");
}else{
//exclamation nullifies the boolean value -> above, "NOT is set"
//!true = not true, aka, false

if($_POST["acceptTerms"] == "on"){
	echo("they accepted");
	}
}

?> -->