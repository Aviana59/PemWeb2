<?php

class LinimasaController
{
    private $conn;

    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    public function create($inputData)
    {
        
        // Implementasi operasi INSERT untuk tabel "linimasa"
        //$file = $inputData['file'];
        $file=$_FILES['file']['name'];
        $tanggal = $inputData['tanggal'];
        $judul = $inputData['judul'];
        $deskripsi = $inputData['deskripsi'];


        // Periksa apakah file yang diunggah adalah gambar
        if ($this->isImageFile($file)) {
            //var_dump(move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$_FILES['file']['name']));
            
            $id = $_SESSION['id'];
            if (move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$_FILES['file']['name'])){
                $linimasaQuery = "INSERT INTO linimasa (id_user, file, tanggal, judul, deskripsi) VALUES ('$id', '$file', '$tanggal', '$judul', '$deskripsi')";
                $result = $this->conn->query($linimasaQuery);
            } else {
                return false;
            }
            
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            // Jika file bukan gambar, kembalikan false atau lakukan tindakan sesuai kebutuhan
            return false;
        }
    }

    // Fungsi untuk memeriksa apakah file adalah gambar
    private function isImageFile($file)
    {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        return in_array($fileExtension, $allowedExtensions);
    }


    public function index()
    {
        // Implementasi operasi SELECT untuk tabel "linimasa"
        $linimasaQuery = "SELECT * FROM linimasa";
        $result = $this->conn->query($linimasaQuery);
        if ($result->num_rows > 0)
        {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        else
        {
            return[];
        }
    }

    public function edit($id)
    {
        // Implementasi operasi SELECT untuk mendapatkan data tertentu dari tabel "linimasa"
        $linimasa_id = $id;
        $linimasaQuery = "SELECT * FROM linimasa WHERE id='$linimasa_id' LIMIT 1";
        $result = $this->conn->query($linimasaQuery);
        if($result && $result->num_rows == 1)
        {
            return $result->fetch_assoc();
        }
        else
        {
            return false;
        }
    }

    public function update($inputData, $id)
{
    // Implementasi operasi UPDATE untuk tabel "linimasa"
    $linimasa_id = $id;
    $foto = $inputData['foto'];
    $tanggal = $inputData['tanggal'];
    $judul = $inputData['judul'];
    $deskripsi = $inputData['deskripsi'];

    // Periksa apakah file yang diunggah adalah gambar
    if ($this->isImageFile($foto)) {
        $linimasaQuery = "UPDATE linimasa SET file='$foto', tanggal='$tanggal', judul='$judul', deskripsi='$deskripsi' WHERE id='$linimasa_id' LIMIT 1";
        $result = $this->conn->query($linimasaQuery);

        if ($result) {
            return true;
        } else {
            return false;
        }
    } else {
        // Jika file bukan gambar, kembalikan false atau lakukan tindakan sesuai kebutuhan
        return false;
    }
}


    public function delete($id)
    {
        // Implementasi operasi DELETE untuk tabel "linimasa"
        
        $linimasa_id = $id;
        $linimasaDeleteQuery = "DELETE FROM linimasa WHERE id=$linimasa_id LIMIT 1";
        $result = $this->conn->query($linimasaDeleteQuery);
        
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>
