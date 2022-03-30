<?php
//print_r($_POST);exit;
header("Location: instruc.html");

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Username = $_POST['Username'];
$Email_address = $_POST['Email_address'];
$Phone_Number = $_POST['Phone_Number'];
$Qualification = $_POST['Qualification'];
$Password1 = $_POST['Password1'];



//2. connect to mysql database                      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'pogiren';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//3. save the form data in mysql database
$sql = 'INSERT INTO it(First_name, Last_name, Username, Email_address, Phone_Number, Qualification, Password1) 
VALUES ("' . $First_name . '", "' . $Last_name . '",  "' . $Username . '", "' . $Email_address . '",  
"' . $Phone_Number . '",  "' . $Qualification . '", "' . $Password1 . '")';



if ($conn->query($sql) === TRUE) {
    //echo "new record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
