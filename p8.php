<!DOCTYPE html>
<html>
<head>
    <title>User-defined Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        h1, h2 {
            text-align: center;
            color: #1565c0;
        }
        p {
            font-size: 1.1em;
            margin: 12px 0;
            padding: 10px;
            background-color: #e1f5fe;
            border-left: 5px solid #0288d1;
            border-radius: 5px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 12px;
            background-color: #1565c0;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0d47a1;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User-defined Functions</h1>
        <div class="box">
            <h2>Problem Statement</h2>
            <p>Perform basic arithmetic operations and calculate the area and perimeter of a rectangle using user-defined functions.</p>

            <?php
            // Function to add two numbers
            function add($a, $b) {
                return $a + $b;
            }

            // Function to subtract two numbers
            function subtract($a, $b) {
                return $a - $b;
            }

            // Function to multiply two numbers
            function multiply($a, $b) {
                return $a * $b;
            }

            // Function to divide two numbers
            function divide($a, $b) {
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Division by zero error!";
                }
            }

            // Function to calculate the area of a rectangle
            function area($length, $width) {
                return $length * $width;
            }

            // Function to calculate the perimeter of a rectangle
            function perimeter($length, $width) {
                return 2 * ($length + $width);
            }

            // Function to find the maximum of three numbers
            function maxOfThree($a, $b, $c) {
                return max($a, max($b, $c));
            }

            // Function to find the minimum of three numbers
            function minOfThree($a, $b, $c) {
                return min($a, min($b, $c));
            }

            // Function to calculate the average of three numbers
            function average($a, $b, $c) {
                return ($a + $b + $c) / 3;
            }

            // Function to check if a number is even
            function isEven($num) {
                return $num % 2 == 0;
            }

            // Example values
            $num1 = 12;
            $num2 = 8;
            $length = 7;
            $width = 3;

           
