<?php
    session_start();
    $requestURI = $_SERVER['REQUEST_URI'];
    $path = explode('/', $requestURI);
    if($path[1]=="reg"){
        $content = file_get_contents('reg.php');
    }elseif($path[1]=="login"){
        $content = file_get_contents('login.php');
    }elseif($path[1]=="profile"){
        $content = file_get_contents('profile.php');
    }elseif($path[1]=="addArticle"){
        $content = file_get_contents('addArticle.php');
    }elseif($path[1]==""){}
    elseif($path[1]=="article"){
        $articleId = $path[2];
        $mysqli = new mysqli("localhost", "root", "", "php1611");
        $result = $mysqli->query("SELECT * FROM articles WHERE id = $articleId");
        $row = $result->fetch_assoc();
        $content = "<h1>". $row['title']."</h1><div>".$row['content'].$row['author'];          
    }else{
        echo "Страница не найдена 404";
    }
    require_once('template.php');