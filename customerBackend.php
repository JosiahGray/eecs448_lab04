<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
echo "<h1> Recipt </h1>";

$user = $_POST["user"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$q1 = $_POST["quantity1"];
$q2 = $_POST["quantity2"];
$q3 = $_POST["quantity3"];
$cost1 = 200.00;
$cost2 = 1200.00;
$cost3 = 350.00;

$sub1 = $q1*$cost1;
$sub2 = $q2*$cost2;
$sub3 = $q3*$cost3;
if($shipping == "sevenDay")
{
  $subShip = 0.00;
  $shipString = "7 day";
}
elseif($shipping == "threeDay")
{
  $subShip = 5.00;
  $shipString = "3 day";
}
else
{
  $subShip = 50.00;
  $shipString = "Overnight";
}
$total = $sub1 + $sub2 + $sub3 + $subShip;

echo "<p>Welcome! <br> Username: $user <br> Password: $password </p>";

echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th> Quantity </th>";
echo "<th> Cost Per Item </th>";
echo "<th> Sub Total </th>";
echo "</tr>";

echo "<tr>";
echo "<th> Pokeball </th>";
echo "<td> $q1 </td>";
echo "<td> $200 </td>";
echo "<td> $$sub1 </td>";
echo "</tr>";

echo "<tr>";
echo "<th> Hyper Potion </th>";
echo "<td> $q2 </td>";
echo "<td> $1200 </td>";
echo "<td> $$sub2 </td>";
echo "</tr>";

echo "<tr>";
echo "<th> Repel </th>";
echo "<td> $q3 </td>";
echo "<td> $350 </td>";
echo "<td> $$sub3 </td>";
echo "</tr>";

echo "<tr>";
echo "<th> Shipping </th>";
echo "<td colspan='2'> $shipString </td>";
echo "<td> $$subShip </td>";
echo "</tr>";

echo "<tr>";
echo "<th colspan='3'> Total Cost </th>";
echo "<td> $$total </td>";
echo "</tr>";

echo "</table>";

?>
