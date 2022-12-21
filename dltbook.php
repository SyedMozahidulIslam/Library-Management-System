<?php

session_start();

require "../db_connect.php";

if(!isset($_SESSION['isbn'])){
    header('location:../index.php');	
 }

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $qry="DELETE from book where isbn=$id";
    $result=mysqli_query($con,$qry);
            
			if($result){
                header('Location:delete_book.php');
            }else{
                echo"ERROR!!";
            }

 }
?>