<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lesson8";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);




$errors=false;

if(empty($_POST['email'])){
    $errors=true;
    }
    if(empty($_POST['password'])){
        $errors=true;
        }
        if(empty($_POST['first_name'])){
            $errors=true;
            }
            if(empty($_POST['last_name'])){
                $errors=true;
                }
    
    if($_POST['password']!=$_POST['password2']){
        $errors=true;
    }

if($errors){
    //redirect back with error message
    $_SESSION['error']=true;
header('Location: index.php?page=3&error');
}else{
    //insert in the DB
    $query = $conn->prepare("INSERT INTO users SET 
    Email = ?, 
    password = ?, 
    name=?, 
    last_name=?");
    //no objekta conn izsaucam metodi prepare(c# ir .)
    //sanitizet datus
$result=$query->execute([
$_POST['Email'],
md5($_POST['password']),
$_POST['first_name'],
$_POST['last_name'],
]);
if($result){
    $_SESSION['success']=true;
    header('Location: index.php?page=3&success');
}else{
    $_SESSION['error']=true;
    header('Location: index.php?page=3&error');
}
 }

    //var_dump($_POST);