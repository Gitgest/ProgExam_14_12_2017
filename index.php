<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" type="text/css" href="css/indexCSS.css"
          <title>tours table</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Rasmus laptop
 * Date: 14/12/2017
 * Time: 09:16
 */

echo "<h1>See tours</h1>";

// server information
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "explorecalifornia";

// establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if($conn->connect_error){
    die("connection failed " . $conn->connect_error);
}

/*login functionality, run sql to get username and password from admin table.
  save results in resultadmin variable.*/
$sqladmin = "SELECT
	admin.userName
	admin.password
FROM
	admin;";
$resultadmin = $conn->query($sqladmin);

if($_POST["Username"]!=$resultadmin.userName || $_POST["Password"]!=$resultadmin.password){
    echo "Username or Password my be incorrect try again ";
    echo "<button onclick='window.history.back()'> Try login again </button>";
}

// General table html
echo "<h1>See tours information</h1>";

echo "<p1>Tours table</p1>
    <table>
        <tr>
            <th>
                tour name
            </th>
            <th>
                tour description
            </th>
            <th>
                tour price
            </th>
            <th>
            tour keywords
            </th>
            <th>
                tour graphic
            </th>
            <th>
                package title
            </th>
            <th>
                package description
            </th>
            <th>
                package graphic
            </th>
        </tr>";

        //information to insert into table with sql query and save results
        $sql = "SELECT
            tours.tourName,
            tours.description,
            tours.price,
            tours.keywords,
            tours.graphic,
            packages.packageTitle,
            packages.packageDescription,
            packages.packageGraphic
        FROM
            tours
        LEFT JOIN packages ON tours.packageId = packages.packageId;";
        $result = $conn->query($sql);

        // output and inserted into table with corresponding column names
        while ($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['tourName'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['description'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['price'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['keywords'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['graphic'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['packageTitle'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['packageDescription'] . "</td>";
            echo "<td style='border: 1px solid darkgreen'>" . $row['packageGraphic'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
?>
</body>
</html>