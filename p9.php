<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Information</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            color: #4CAF50;
            text-decoration: none;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>People Information</h1>
        <div class="box">
            <?php
            // Initialize parallel arrays with new values
            $names = ["Oliver", "Sophie", "James", "Amelia", "Liam", "Isabella", "Noah", "Mia", "Lucas", "Ava"];
            $ages = [23, 29, 32, 26, 30, 28, 21, 27, 24, 25];
            $sexes = ["Male", "Female", "Male", "Female", "Male", "Female", "Male", "Female", "Male", "Female"];
            $nationalities = ["Australian", "Canadian", "British", "American", "Indian", "French", "German", "Italian", "Spanish", "Japanese"];

            // Function to sort the arrays based on names
            function sortPeople($names, $ages, $sexes, $nationalities) {
                $length = count($names);
                for ($i = 0; $i < $length; $i++) {
                    for ($j = $i + 1; $j < $length; $j++) {
                        if ($names[$i] > $names[$j]) {
                            // Swap names
                            $tempName = $names[$i];
                            $names[$i] = $names[$j];
                            $names[$j] = $tempName;

                            // Swap ages
                            $tempAge = $ages[$i];
                            $ages[$i] = $ages[$j];
                            $ages[$j] = $tempAge;

                            // Swap sexes
                            $tempSex = $sexes[$i];
                            $sexes[$i] = $sexes[$j];
                            $sexes[$j] = $tempSex;

                            // Swap nationalities
                            $tempNationality = $nationalities[$i];
                            $nationalities[$i] = $nationalities[$j];
                            $nationalities[$j] = $tempNationality;
                        }
                    }
                }
                return [$names, $ages, $sexes, $nationalities];
            }

            // Display unsorted lists
            echo "<h3>Unsorted List:</h3>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($names); $i++) {
                echo "<tr><td>{$names[$i]}</td><td>{$ages[$i]}</td><td>{$sexes[$i]}</td><td>{$nationalities[$i]}</td></tr>";
            }
            echo "</table>";

            // Sort the arrays
            list($sortedNames, $sortedAges, $sortedSexes, $sortedNationalities) = sortPeople($names, $ages, $sexes, $nationalities);

            // Display sorted lists
            echo "<h3>Sorted List (by Name):</h3>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($sortedNames); $i++) {
                echo "<tr><td>{$sortedNames[$i]}</td><td>{$sortedAges[$i]}</td><td>{$sortedSexes[$i]}</td><td>{$sortedNationalities[$i]}</td></tr>";
            }
            echo "</table>";
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
