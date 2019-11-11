<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse:collapse;
}
</style>
</head>
<body>
<h1> Umitbaev Ilias , IU4-13Б , Variant 3 </h1>
<h2> task1 </h2>
<?php
echo "<table border=1>";
for( $a=1; $a<11; $a++)
{ 
echo "<tr>";
for( $b=1; $b<11; $b++)
{ echo "<td>" , $a*$b , "</td>";}
} echo "</tr>";
echo "</table>";
?>
</body>
</html>
