<?php
if (isset($_POST['submit'])) {
    // Get form data
    $studentId = $_POST['student_id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $englishMarks = $_POST['english_marks'];
    $hindiMarks = $_POST['hindi_marks'];
    $mathMarks = $_POST['math_marks'];
    $scienceMarks = $_POST['science_marks'];
    $historyMarks = $_POST['history_marks'];
    $geographyMarks = $_POST['geography_marks'];
    $remarks = $_POST['remarks'];

    // Calculate total marks
    $totalMarks = $englishMarks + $hindiMarks + $mathMarks + $scienceMarks + $historyMarks + $geographyMarks;

    // Calculate percentage
    $percentage = round(($totalMarks / 600) * 100, 2);

    // Calculate grade based on percentage
    if ($percentage >= 75) {
        $grade = "Distinction";
    } elseif ($percentage >= 60 && $percentage <= 74) {
        $grade = "First Class";
    } elseif ($percentage >= 33 && $percentage <= 59) {
        $grade = "Pass";
    } else {
        $grade = "Fail";
    }
}
?>
