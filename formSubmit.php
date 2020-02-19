<?php
echo "<style>";
echo 'tr:nth-child(even) {background-color: #e6e6e6;}';
echo "</style>";
echo "<html>";
echo "<body>";
echo "<table>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>".$_POST["name"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email</td>";
echo "<td>".$_POST["email"]."</td>";
echo "</tr>";
echo "</table>";
echo "</body>";
echo "</html>";
?>