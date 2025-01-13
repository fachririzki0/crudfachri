<?php

function cek_login(){
    if(empty($_SESSION['username'])){
        return false;

    }else{
        return true;
    }
}

function cek_timeout()
{
    $waktu_idle=time()-$_SESSION['waktu'];
    if($waktu_idle> 1000) {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>
        alert('Anda Telah logout');
        window.location='login.php';
        </script>
        ";
    }
    $_SESSION['waktu'] = time();
}