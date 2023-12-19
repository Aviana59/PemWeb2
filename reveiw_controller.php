<?php

class ReviewController
{
    private $conn;

    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    public function create($inputData)
    {
        // Implementasi operasi INSERT untuk tabel "review"
        $auth = new Auth($this->conn);
        $username = $auth->getUsername(); // Mendapatkan username yang terotentikasi
        $textReview = $inputData['review'];

        $reviewQuery = "INSERT INTO review (username, review) VALUES ('$username', '$textReview')";
        $result = $this->conn->query($reviewQuery);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function index()
    {
        // Implementasi operasi SELECT untuk tabel "review"
        $reviewQuery = "SELECT * FROM review";
        $result = $this->conn->query($reviewQuery);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>