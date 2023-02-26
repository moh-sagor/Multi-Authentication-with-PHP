<?php
class Users
{
    private $con = "";
    public function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "student_information");
    }


    public function registration($allData)
    {
        $userName = $allData["userName"];
        $email = $allData["email"];
        $phone = $allData["phone"];
        $pass = $allData["pass"];
        $cpass = $allData["cpass"];
        $role = "user";
        $status = "0";
        if ($pass == $cpass) {
            $pass = md5($pass);
            $this->con->query("INSERT INTO tbl_users(userName,email,phone,password,role,status)VALUES('$userName','$email','$phone','$pass','$role','$status')");
            echo "Registration Completed! Please wait for Approve.........";
        } else {
            echo "Your password not matched";
        }


    }

    public function login($userInfo, $pass)
    {
        $pass = md5($pass);
        $qur = $this->con->query("SELECT * FROM tbl_users WHERE (userName = '$userInfo' OR email='$userInfo' OR phone='$userInfo') AND password='$pass' AND status='1'");

        if ($qur->num_rows > 0) {
            session_start();
            $data = $qur->fetch_assoc();
            $_SESSION['userName'] = $data["userName"];
            $_SESSION['email'] = $data["email"];
            $_SESSION['phone'] = $data["phone"];
            $_SESSION['role'] = $data["role"];
            header("location:dashboard.php");
        } else {
            echo "User Name or Password Not Found";
        }
    }
}

?>