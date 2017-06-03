<?php
// number in pounds we want to convert to kilograms
$pounds = 140;
// floating point value for the lb to kilogram conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate pounds multiplied by the kilogram conversion
$kilograms = $pounds * $lb_to_kg;
// display the pounds to kilograms
echo "<p>Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg </p>";

// number in miles we want to convert to km
$miles = 2.5;
// floating point value for the mile to km conversion
$mile_to_km = 1.60934;
// use the variable above to calculate miles multiplied by the km conversion
$kilometers = $miles * $mile_to_km;
// display the miles to km
echo "<p>Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km </p>";
?>
