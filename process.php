<?php session_start();
$_SESSION['n'] = $n = $_POST['firstName'];
$_SESSION['e'] = $e = $_POST['lastName'];
$_SESSION['u'] = $u = $_POST['email'];
$_SESSION['p'] = $p = $_POST['firstModel'];



//echo $n . "<br>" .
//    $e ."<br>".
//    $u ."<br>".
//    $p ."<br>";
//
//print_r($i);
//echo "<br>";
//echo $i['size'];

//mkdir('users/'.$u);
//
//$t = $i['tmp_name'];
//$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];


//move_uploaded_file($t,$f);











//$cnt = mysqli_connect("localhost", "root", "root", "cardata");
		$cnt = mysqli_connect("localhost", "fssa", "Webdevfun1!", "fssa");

$qry ="insert into carinfo (firstName, lastName,email,firstModel) values('$n', '$e','$u','$p')";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

header('location:confirmation.php');

?>