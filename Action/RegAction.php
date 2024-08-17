<?php
 $HostName = 'localhost' ;
 $dbUserName = 'root';
 $dbUserPassword = '';
 $dbName= 'registration_db';

 $connection = new mysqli($HostName,$dbUserName,$dbUserPassword,$dbName);
//echo "Connected ";

if ($connection->connect_error) {
    die("Connection failed:" . $connection->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $userName = htmlspecialchars($_POST['UserName']);
    $userEmail = htmlspecialchars($_POST['UserEmail']);
    $userPassword = htmlspecialchars($_POST['Userpw']);
if (empty($userName) || empty($userEmail) || empty($userPassword)) {
    echo "Please fill in all the required fields.";
    return;
}
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
 $query = $connection->prepare("SELECT id FROM user WHERE user_email=? AND user_name=?");
 $query->bind_param("ss", $userEmail, $userName);
 $query->execute();
 $query->store_result();
 if ($query->num_rows === 0) {
echo ("echo");
 }
 else {
     echo "The email already exists.";
 }
    }
    else {
        echo "Invalid Email format.";
    }

}
else {

    echo "Invalid request method";
}
$connection->close();


