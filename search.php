<html>
	<head>
	<title>Search</title>

	<body>
		<center><h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1></center>
		</body>
</html>
		
<?php
	$type = $_POST['type'];
	$text = $_POST['text'];
	if (!empty($type) || !empty($text)) {
		$host = "localhost";
    	$dbUsername = "root";
		$dbPassword = "root";
    	$dbname = "travel";
    	//create connection
    	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    	if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    	} else {
			switch ($type) {
    case "name":
        $SELECT = "SELECT distinct name, terrtype, district, clospoi, other_info from place where name ='".$text."'";
        break;
    case "district":
        $SELECT = "SELECT name, terrtype, district, clospoi, other_info from place where district ='".$text."'";
        break;
    case "terrrain":
        $SELECT = "SELECT name, terrtype, district, clospoi, other_info from place where terrain ='".$text."'";
        break;
	case "closepoi":
        $SELECT = "SELECT name, terrtype, district, clospoi, other_info from place where clospoi ='".$text."'";
        break;				
    default:
        echo "Wrong choice!";
}
			$records = mysqli_query($conn,$SELECT);
		}
} else {
 echo "All fields are required";
 die();
}
?>		
		<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			
			<th>Name</th>
			<th>Terrain</th>
			<th>District</th>
			<th>Close POI</th>
			<th>Other info</th>
			
<?php
			
			while($place=mysqli_fetch_assoc($records)) {
				
				echo "<tr>";
				echo "<td>".$place['name']."</td>";
				echo "<td>".$place['terrtype']."</td>";
				echo "<td>".$place['district']."</td>";
				echo "<td>".$place['clospoi']."</td>";
				echo "<td>".$place['other_info']."</td>";
				echo "</tr>";
			}

?>			
			</tr></table>
		<button><a href="search.html">Go to search</a></button>
		</body>
</html>