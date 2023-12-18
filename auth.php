<?php
class Auth {

    // Set local variabel to store db connection from 'koneksi.php'
    private $db;

    //construct function : fungsi yang otomatis dijalankan ketika class ini digunakan / dipanggil
    public function __construct($koneksi){
        $this->db = $koneksi;
        session_start();
    }

    public function signup($data){


        $username= $data['username'];
        $email= $data['email'];
        $password= $data['password'];
        $create= $this->db->query("INSERT INTO user (username,email,password) VALUES ('$username', '$email', '$password')");
        

        if($create){
            return true;
        } else {
            return false;
        }
    }
    
    public function signin($username, $password){
        // cari data dengan username dan password seperti yang diberikan
        $user = $this->db->query("SELECT username FROM user WHERE username = '$username' AND password = '$password'");

        // jika data jumlahnya lebih dari 0 atau data ny ada
        if(mysqli_num_rows($user) > 0){
            $_SESSION["user"] = $username;
            $_SESSION["is_signin"] = true;

            return true;            
        }
        return false;
    }

    public function signout(){
        session_destroy();
        return true;
    }
}