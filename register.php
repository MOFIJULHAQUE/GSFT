<?php

include 'includes/connection.php';

$form_name = $_POST['form_name'];
$form_email = $_POST['form_email'];
$form_course = $_POST['form_course'];
$form_phone = $_POST['form_phone'];
$form_dob = $_POST['form_dob'];

$sql = "INSERT INTO `student_info`(`fullname`, `email`, `courses`, `phone`, `dob`, `enabled`) VALUES ('$form_name','$form_email','$form_course','$form_phone','$form_dob','1');";
if ($conn->query($sql) === TRUE) {
    echo "registered succesfully";
} else {
    echo "failed" . $conn->error;
}
