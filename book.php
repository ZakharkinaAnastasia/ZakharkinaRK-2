<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel = 'stylesheet' href = 'style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            
                <img src="logo.png" alt="a photo" id="logo-poly" height="90" margin-right="35px">
                <a class="nav-item"><h1>BookYouNeed</h1></a>
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#contact">Контакты</a>
                <a class="nav-item" href="shop.php">Магазин</a>
                <!--<a class="nav-item" href="math.php">Математика</a>-->
                <!--<a class="autorization" href="authorization.php">Авторизация</a>-->
                <a class="nav" href="<?php 

                    $name='Авторизация'; 
                    $link='authorization.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
           
        </div>
    </div>    
</div>

<div class="header-down">
    <div class="book">
        <?php 
        require('dbconnection.php');
        $id = $_GET['id'];

        $sql = mysqli_query($conn, "SELECT * FROM `bookYouNeed` WHERE `id`=".$id);
        while ($result = mysqli_fetch_array($sql)) {
            echo '<h1 text-align="center">'.$result['name'].'</h1><br>'.'<img src="'.$result['picture'].'" text-align="center" height="300"><br>'.'<h3>Описание: '.$result['description'].'</h3><br><h3>Цена: '.$result['price'].'</h3><br><h3>В наличии: '.$result['number'].'</h3>';
        }
        
        ?>
    </div>
</div>
    
<div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: bookYouNeed@inbox.ru</p>
        <p class="foot" id = "contact">Телефон: +7(916)079-15-00</p>
        <!--<a class="nav" href="communication.php">Обратная связь</a>-->
        <a class="nav" href="<?php 

                    $name='Обратная связь'; 
                    $link='communication.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
        <p class = "foot" id = "date"><?php require "date.php" ?></p>
    </div>   
</div>
</body>  
</html>