<?php
session_start();

include('koneksi.php');
include_once('review_controller.php');

$db = new DatabaseConnection;

if (isset($_POST['save_review']))
{
    $inputData = [
        'username' => mysqli_real_escape_string($db->conn,$_POST['username']),
        'text_review' => mysqli_real_escape_string($db->conn,$_POST['text_review']),
    ];

    $review = new ReviewController;
    $result = $review->create($inputData);
    if ($result)
    {
        $_SESSION['message'] = "Review Added Successfully";
        header("Location: Dashboard.php");
        exit (0);
    }
    else
    {
        $_SESSION['message'] = "Review Not Added";
        header("Location: Dashboard.php");
        exit (0);
    }
}