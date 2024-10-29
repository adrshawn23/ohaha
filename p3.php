<?php
if (isset($_POST['submit'])) {
    $quiz1 = $_POST['quiz1'];
    $quiz2 = $_POST['quiz2'];
    $quiz3 = $_POST['quiz3'];
    $project1 = $_POST['project1'];
    $midterm = $_POST['midterm'];

    $averageQuizzes1 = ($quiz1 + $quiz2 + $quiz3) / 3;
    $midtermGrade = ($averageQuizzes1 * 0.3) + ($project1 * 0.2) + ($midterm * 0.5);

    $quiz4 = $_POST['quiz4'];
    $quiz5 = $_POST['quiz5'];
    $quiz6 = $_POST['quiz6'];
    $project2 = $_POST['project2']; // Changed this line to correctly reference project2
    $project3 = $_POST['project3'];
    $finalExam = $_POST['final_exam'];

    $averageQuizzes2 = ($quiz4 + $quiz5 + $quiz6) / 3;
    $averageProjects2 = ($project2 + $project3) / 2;
    $tentativeFinalGrade = ($averageQuizzes2 * 0.3) + ($averageProjects2 * 0.2) + ($finalExam * 0.5);

    $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

    echo "<h2>Results</h2>";
    echo "<p><strong>Midterm Grade:</strong> " . number_format($midtermGrade, 2) . "</p>";
    echo "<p><strong>Tentative Final Grade:</strong> " . number_format($tentativeFinalGrade, 2) . "</p>";
    echo "<p><strong>Final-Final Grade:</strong> " . number_format($finalFinalGrade, 2) . "</p>";
}
?>
