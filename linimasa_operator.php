<?php

session_start();

include('koneksi.php');
include('LinimasaController.php');

$db = new DatabaseConnection;

$linimasa = new LinimasaController($db->conn);

if (isset($_POST['kirim'])) 
{
    $inputData = [
        'file' => mysqli_real_escape_string($db->conn, $_FILES["image"]["name"]),
        'tanggal' => mysqli_real_escape_string($db->conn, $_POST['tanggal']),
        'judul' => mysqli_real_escape_string($db->conn, $_POST['judul']),
        'deskripsi' => mysqli_real_escape_string($db->conn, $_POST['deskripsi']),
    ];

    $result = $linimasa->create($inputData);

    if ($result) {
        $_SESSION['message'] = "Data Added Successfully";
        header("Location: upload.php");
        // FOLDER DIMANA GAMBAR AKAN DI SIMPAN
			$folder = 'assets/file/';
			// GAMBAR DI SIMPAN KE DALAM FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);
        exit(0);
    } else {
        $_SESSION['message'] = "Not Inserted";
        header("Location: upload.php");
        exit(0);
    }
}

if (isset ($_POST['update_linimasa']))
{
    $id = mysqli_real_escape_string($db->conn,$_POST['linimasa_id']);
    $inputData = [
        'file' => mysqli_real_escape_string($db->conn, $_FILES["image"]["name"]),
        'tanggal' => mysqli_real_escape_string($db->conn, $_POST['tanggal']),
        'judul' => mysqli_real_escape_string($db->conn, $_POST['judul']),
        'deskripsi' => mysqli_real_escape_string($db->conn, $_POST['deskripsi']),
    ];
    $linimasa = new LinimasaController;
    $result = $linimasa->update($inputData,$id);

    if ($result)
    {
        $_SESSION['message'] = "Linimasa Edit Successfully";
        header("Location: Dashboard.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Linimasa Edit Failed";
        header("Location: Dashboard.php");
        exit(0);
    }
}

if (isset($_POST['delete_linimasa']))
{
    $id = mysqli_real_escape_string($db->conn,$_POST['delete_linimasa']);
    $linimasa = new LinimasaController;
    $result = $linimasa->delete($id);
    if ($result)
    {
        $_SESSION['message'] = "Linimasa Delete Successfully";
        header("Location: Dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Linimasa Not Delete";
        header("Location: Dashboard.php");
        exit(0);
    }
}
?>
