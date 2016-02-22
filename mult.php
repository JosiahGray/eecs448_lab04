<?php
//start table
echo "<table style='width:100%'>";

$row = 1;
$column = 1;

//setup first row
echo "<tr>";
echo "<td> </td>";
for($column = 1; $column <= 100; $column++)
{
  echo "<td> $column </td>";
}
echo "</tr>";

//put in table
for($row = 1; $row <= 100; $row++)
{
  echo "<tr>";

  echo "<td> $row </td>";

  for($column = 1; $column <= 100; $column++)
  {
    echo "<td>".($row * $column)."</td>";
  }

  echo "</tr>";
}

echo "</table>";
?>
