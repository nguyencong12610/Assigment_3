<?php
// lấy dữ liệu từ form input sử dụng post
if(count($_POST) > 0): // tuc la co du lieu
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //insert to table
    $user = new \Assigment1\User(null,$name,$email,$pass);
    $user->save();
    header("Location: ?route=users"); // dieu huong tro lai trang danh sach
    endif;