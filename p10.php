<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2, h3, h4 {
            color: #007BFF;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Two-dimensional Array</h1>
        <div class="box">
            <h2>Matrix Operations</h2>
            <?php
            // Define the size of the matrix
            $N = 5; // Changed size to 5
            $matrix = [];
            $overallSum = 0;
            $overallMin = PHP_INT_MAX;
            $overallMax = PHP_INT_MIN;

            // Fill the NxN array with random integers
            for ($i = 0; $i < $N; $i++) {
                for ($j = 0; $j < $N; $j++) {
                    $matrix[$i][$j] = rand(50, 150); // Random integers between 50 and 150
                    $overallSum += $matrix[$i][$j];
                    $overallMin = min($overallMin, $matrix[$i][$j]);
                    $overallMax = max($overallMax, $matrix[$i][$j]);
                }
            }

            // Display the matrix
            echo "<h3>Matrix:</h3>";
            echo "<table>";
            for ($i = 0; $i < $N; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $N; $j++) {
                    echo "<td>{$matrix[$i][$j]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // Initialize arrays for sums, averages, min, and max
            $rowSums = $colSums = $rowMins = $colMins = $rowMaxs = $colMaxs = [];
            $diagonal1Sum = $diagonal2Sum = 0;

            // Calculate sums, averages, min, and max
            for ($i = 0; $i < $N; $i++) {
                $rowSums[$i] = $colSums[$i] = 0;
                $rowMins[$i] = PHP_INT_MAX;
                $rowMaxs[$i] = PHP_INT_MIN;
                $colMins[$i] = PHP_INT_MAX; // Initialize column mins
                $colMaxs[$i] = PHP_INT_MIN; // Initialize column maxs

                for ($j = 0; $j < $N; $j++) {
                    // Row calculations
                    $rowSums[$i] += $matrix[$i][$j];
                    $rowMins[$i] = min($rowMins[$i], $matrix[$i][$j]);
                    $rowMaxs[$i] = max($rowMaxs[$i], $matrix[$i][$j]);

                    // Column calculations
                    $colSums[$j] += $matrix[$i][$j]; // Fixed column sums
                    $colMins[$j] = isset($colMins[$j]) ? min($colMins[$j], $matrix[$i][$j]) : $matrix[$i][$j];
                    $colMaxs[$j] = isset($colMaxs[$j]) ? max($colMaxs[$j], $matrix[$i][$j]) : $matrix[$i][$j];

                    // Diagonal calculations
                    if ($i == $j) {
                        $diagonal1Sum += $matrix[$i][$j];
                    }
                    if ($i + $j == $N - 1) {
                        $diagonal2Sum += $matrix[$i][$j];
                    }
                }
            }

            // Display results
            echo "<h3>Results:</h3>";
            echo "<h4>Row Sums and Averages:</h4>";
            for ($i = 0; $i < $N; $i++) {
                $average = $rowSums[$i] / $N;
                echo "<p>Row $i: Sum = {$rowSums[$i]}, Average = $average, Min = {$rowMins[$i]}, Max = {$rowMaxs[$i]}</p>";
            }

            echo "<h4>Column Sums and Averages:</h4>";
            for ($j = 0; $j < $N; $j++) {
                $average = $colSums[$j] / $N;
                echo "<p>Column $j: Sum = {$colSums[$j]}, Average = $average, Min = {$colMins[$j]}, Max = {$colMaxs[$j]}</p>";
            }

            echo "<h4>Diagonal Sums:</h4>";
            echo "<p>Diagonal 1 Sum = $diagonal1Sum</p>";
            echo "<p>Diagonal 2 Sum = $diagonal2Sum</p>";

            $overallAverage = $overallSum / ($N * $N);
            echo "<h4>Overall Results:</h4>";
            echo "<p>Sum = $overallSum, Average = $overallAverage, Min = $overallMin, Max = $overallMax</p>";
            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
