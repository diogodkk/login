<?php
    $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
        echo "Bem-Vindo, $login_cookie <br>";
        echo "Acesso permitido <style='color:red'>";
    }else{
        echo"Bem-vindo convidado<br>";
        echo"Acesso não permitido <style='color:red'>";
        echo"<br><a href='cadastro.html'>Faça login</a>";
    }