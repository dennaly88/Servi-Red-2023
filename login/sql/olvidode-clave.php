<?php
        include('conexion.php');
        if (!$conexion) 
        {
            header ("location:../index.php?mar=10");
        }
        else 
        {
            $pregunta = $_POST['pregunta'];
            $cedula = $_POST['cedula'];
            $consulta="SELECT * from usuarios where pregunta = '$pregunta' &&  cedula = '$cedula'";
            $resultado=mysqli_query($conexion,$consulta);
            $filas=mysqli_num_rows($resultado);
            $data = mysqli_fetch_assoc($resultado); 
            if ($filas>0) 
            {
              
                session_start();  
                $_SESSION['usuario']=$data['usuario'];
                $_SESSION['contraseña']=$data['contraseña'];
                header("location: ../usuario-contraseña.php");
                //echo  $_SESSION['usuario'].' ' .  $_SESSION['contraseña'];
                
            }
            else {
                header ("location:../olvidosuclave.php?oro=5");
            }  
        
        }
      
    ?>