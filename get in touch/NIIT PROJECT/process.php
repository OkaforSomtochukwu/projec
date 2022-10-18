<?php

    if(isset($_POST['btn-send']))
    {
        $Username = $_POST['Uname'];
        $Email = $_POST['Email'];
        $subject = $_POST['Subject'];
        $Msg = $_POST['msg'];

        if(empty($Username) || empty($Email) || empty($subject) || empty($Msg))
        {
            header('location:index.php?error');
        }
        else
        {
            $to="anthonyitua.com";

            if(mail($to,$subject,$Msg,$Email))
            {
                header("location:index.php?success");
            }
        }
            

    }
    else
    {
        header("location:index.php");
    }


?>