BMI Calculator in PHP

This project is a simple PHP application that calculates the Body Mass Index (BMI) based on the user's weight, height, and age.

Features

Form to input age, weight (kg), and height (cm).

Automatic BMI calculation upon form submission.

Display of BMI result with interpretation (e.g., underweight, normal weight, overweight, etc.).

Prerequisites

Web server (Apache, Nginx, etc.)

PHP installed (version 7.4 or later recommended)

Installation

Clone or download this project to your local server.

Ensure that the header.php and footer.php files exist in the same directory.

Start a local server (e.g., via XAMPP or WAMP).

Open your browser and go to http://localhost/project_path/

Code Structure

<?php include_once "header.php"; ?>

<div class="container mt-5">
    <h1 class="display-4 text-center">Calculate Your BMI</h1>
    <div class="card shadow-lg p-4">
        <form method="POST" action="">
            <label>Age:</label>
            <input type="number" name="age" class="form-control" required>
            <label>Weight (kg):</label>
            <input type="number" name="poid" class="form-control" required>
            <label>Height (cm):</label>
            <input type="number" name="taille" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-3">Calculate</button>
        </form>
        
        <?php
        if (!empty($_POST['age']) && !empty($_POST['poid']) && !empty($_POST['taille'])) {
            $age = $_POST['age'];
            $poid = $_POST['poid'];
            $taille = $_POST['taille'] / 100;
            if ($taille > 0) {
                $bmi = $poid / ($taille * $taille);
                echo "<p>Your BMI is: " . round($bmi, 2) . "</p>";
            }
        }
        ?>
    </div>
</div>

<?php include_once "footer.php"; ?>

Calculation Explanation

BMI is calculated using the formula:

BMI = weight (kg) / (height (m) * height (m))

The BMI result is then compared to predefined thresholds to determine the classification (underweight, normal weight, overweight, etc.).

Possible Improvements

Improved UI using Bootstrap or custom CSS.

Input validation to prevent calculation errors.

Storing results in a database.

Authors

Your Name - PHP Developer

License

This project is licensed under the MIT License - you are free to modify and distribute it.

# calcul-de-l-IMC
