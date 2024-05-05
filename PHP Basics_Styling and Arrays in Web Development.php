<?php
// Start of the HTML document with style definitions
echo '<!DOCTYPE html>
<html>
<head>
    <style>
        /* Apply hover effect to all paragraphs */
        p:hover {
            font-size: 20px; /* Increase font size on hover */
            cursor: pointer; /* Optional: Changes the cursor to indicate it\'s hoverable */
        }
    </style>
</head>
<body>';

// Create an indexed array of car brands
$cars = array("Volvo", "BMW", "Toyota");

// Print each car brand using indexed access
echo '<p>I like ' . $cars[0] . ', ' . $cars[1] . ', and ' . $cars[2] . '.</p>';

// Determine the number of car brands in the array
$car_count = count($cars);
echo '<p>The array contains ' . $car_count . ' car brands.</p>';

// Exercise: Create an associative array of fruits with their respective color
$fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

// Access and print the color of a specific fruit
echo '<p>An apple is ' . $fruits['Apple'] . '.</p>';

// Exercise: Output the number of fruits in the array
echo '<p>There are ' . count($fruits) . ' fruits in the array.</p>';

// Additional example with manual indexing
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
echo '<p>I still like ' . $cars[0] . ', ' . $cars[1] . ', and ' . $cars[2] . '.</p>';

// End of the HTML document
echo '</body>
</html>';
?>
