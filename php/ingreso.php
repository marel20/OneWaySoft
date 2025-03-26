<?php
    include '../php/conectar.php';

        $user=$_POST['userName'];
        $pass=$_POST['password'];

        
        $ingreso=mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '".$user."' and password  = '".$pass."'");
        $nr=mysqli_num_rows($ingreso);
        $filas=mysqli_fetch_assoc($ingreso);
        session_start();
        $_SESSION['acceso']=0;
        
        if($nr == 1){
          if($filas["categoria"] == 5){
            $_SESSION['acceso']=5;
            $_SESSION['userName']=$user;
          
           
            header("location: ../pages/admin.php");
          }
          if($filas["categoria"] == 1){
            $_SESSION['acceso']=1;
            $_SESSION['userName']=$user;
            header("location: ../pages/adminClient.php");
          }
          if($filas["categoria"] == 2){
            $_SESSION['acceso']=2;
            $_SESSION['userName']=$user;
            header("location: ../pages/adminClient.php");
          }
          if($filas["categoria"] == 3){
            $_SESSION['acceso']=3;
            $_SESSION['userName']=$user;
            header("location: ../pages/adminClient.php");
          }
          if($filas["categoria"] == 4){
            $_SESSION['acceso']=4;
            $_SESSION['userName']=$user;
            header("location: ../pages/adminClient.php");
          }
         
        }else {
            if($nr == 0){
                echo "<script language='javascript'>alert('Usuario o Contraseña Incorrecto'); window.location.href='../pages/ingresar.php'</script>";
                
       
            }
        }


      ?>