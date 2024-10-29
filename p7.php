<!DOCTYPE html>
<html>
<head>
    <title>Loop Statements</title>
  	<link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 750px;
            margin: 0 auto;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        h1, h2 {
            text-align: center;
            color: #2e7d32;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        table, th, td {
            border: 1px solid #8bc34a;
            text-align: center;
        }
        th {
            background-color: #8bc34a;
            color: #fff;
            padding: 10px;
        }
        td {
            padding: 8px;
            background-color: #f1f8e9;
        }
        p {
            font-size: 1.1em;
            margin: 12px 0;
            padding: 10px;
            background-color: #e8f5e9;
            border-left: 5px solid #4caf50;
            border-radius: 5px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #388e3c;
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
        <h1>Loop Statements</h1>
        <div class="box">
            <?php
            // Declare whole number variables with new values
            $n = 4; // Updated value for multiplication table and factorial
            $m = 7; // Updated value for Fibonacci series and summation

            // Display n x m multiplication table using for loop
            echo "<h2>Multiplication Table of $n</h2>";
            echo "<table>";
            echo "<tr><th>Multiplier</th><th>Result</th></tr>";
            for ($i = 1; $i <= $m; $i++) {
                $result = $n * $i;
                echo "<tr><td>$n x $i</td><td>$result</td></tr>";
            }
            echo "</table>";

            // Display n Fibonacci series using while loop
            echo "<h2>Fibonacci Series of $n Terms</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            echo "<p>";
            while ($count < $n) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }
            echo "</p>";

            // Display m Fibonacci series using while loop
            echo "<h2>Fibonacci Series of $m Terms</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            echo "<p>";
            while ($count < $m) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }
