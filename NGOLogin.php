<?php require('constant.php'); ?>
<?php
echo "Hii";
// Grab User submitted information
$email = $_POST['NGOEmail'];
$pass = $_POST['NGOPassword'];

// Connect to the database
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = constant("DATABASE_NAME");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
$sql = "SELECT * FROM `ngo` WHERE PASSWORD='".$pass."' AND email='".$email."'";

	$result = $conn->query($sql);
    echo $result->num_rows;
	if ($result->num_rows > 0) {
        echo "Welcome ";
        $str=constant('HOME');
        $str=substr($str, 1, (strlen($str)-2));
        $str = "http://localhost:8080/welfare/".$str;
        header("Location: ".$str);
    } else {
        echo "No results found";
    }
    $conn->close();
?>

