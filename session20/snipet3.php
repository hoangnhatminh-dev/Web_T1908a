<html>
<head>
    <title>Confectionery Details</title>
</head>
<body>
<?php
$logcookie = $_COOKIE['logname'];
echo "</head>";
echo "<body>";
echo "<center>";
echo "<align='right>";
echo "Welcome $logcookie";
echo "<br><a href='logout.php'>Logout</a>";
echo "<center>";
echo "<h3> Shoper's Paradise</h3>";
echo "<h5> Shop till you drop!!</h5>";
echo "<hr>";
echo "<br>";
echo "<table border='1'>";
echo "<tr align='center'>";
echo "<th>Code</th>";
echo "<th>name</th>";
echo "<th>price</th>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>C001</td>";
echo "<td><a href=''>Vanilla Crush</a></td>";
echo "<td>$4.00</td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>c002</td>";
echo "<td><a href=''>Choco Chunks</a></td>";
echo "<td>$7.00</td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>C002</td>";
echo "<td><a href=''>Strawberry</a></td>";
echo "<td> $9.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>"
?>
</body>
</html>