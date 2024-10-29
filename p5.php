<!DOCTYPE html>
<html>
<head>
    <title>Using Constants in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 0;
            color: #4a5568;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2b6cb0;
        }
        .box {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            color: #2c5282;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin: 10px 0;
        }
        a {
            color: #3182ce;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Using Constants in PHP</h1>
        <div class="box">
            <?php
            // Defining 10 Constants with new values
            define("PI", 3.14159);  // Mathematical constant for π
            define("EULER", 2.71828);  // Euler's number
            define("GRAVITY", 9.81);  // Gravity on Earth in m/s²
            define("LIGHT_SPEED", 3e8);  // Speed of light in m/s (approximate)
            define("BOLTZMANN_CONSTANT", 1.380649e-23);  // J/K
            define("PLANCK_CONSTANT", 6.626e-34);  // Planck's constant in J⋅s (approximate)
            define("AVOGADRO_NUMBER", 6.022e23);  // Particles per mole
            define("EARTH_RADIUS", 6371);  // Radius of Earth in km
            define("GOLDEN_RATIO", 1.618);  // Golden ratio (φ)
            define("FREEZING_POINT_WATER", 0);  // Freezing point of water in °C

            // Displaying Constants with Examples
            echo "<h2>Constants and Examples</h2>";
            echo "<p><strong>PI:</strong> " . PI . " <br> Example: Calculating circle area.</p>";
            echo "<p><strong>Euler's Number (e):</strong> " . EULER . " <br> Example: Exponential growth functions.</p>";
            echo "<p><strong>Gravity on Earth:</strong> " . GRAVITY . " m/s² <br> Example: Free-falling object calculations.</p>";
            echo "<p><strong>Speed of Light:</strong> " . LIGHT_SPEED . " m/s <br> Example: Distance light travels in a vacuum.</p>";
            echo "<p><strong>Boltzmann Constant:</strong> " . BOLTZMANN_CONSTANT . " J/K <br> Example: Thermodynamic equations.</p>";
            echo "<p><strong>Planck's Constant:</strong> " . PLANCK_CONSTANT . " J⋅s <br> Example: Photon energy calculations.</p>";
            echo "<p><strong>Avogadro's Number:</strong> " . AVOGADRO_NUMBER . " <br> Example: Mole calculations in chemistry.</p>";
            echo "<p><strong>Earth Radius:</strong> " . EARTH_RADIUS . " km <br> Example: Geospatial and navigation calculations.</p>";
            echo "<p><strong>Golden Ratio:</strong> " . GOLDEN_RATIO . " <br> Example: Patterns in art and architecture.</p>";
            echo "<p><strong>Freezing Point of Water:</strong> " . FREEZING_POINT_WATER . "°C <br> Example: Standard point in temperature scales.</p>";
            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
</body>
</html>
