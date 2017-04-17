<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script language="javascript" src="js/jquery-1.11.3.js"></script>
    <script language="javascript" src="js/bootstrap.min.js"></script>
    <script language="javascript" src="js/userInput.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HoneyHunters.1</title>
</head>

<body>
<div class="container">
    <div class="row header">
        <div class="company col-sm-3 col-sm-offset-1">
            <a href="#"><img  src="http://honey-hunters.ru/public/img/logo_50.png"
                              alt="logo">
                <span class="hhs">HoneyHunters</span></a>
        </div>
    </div>
    <div class="row envelope">

        <div class="circle">
            <button type="submit"  form="datainsert" class="inside">

                    <img class = "env-img" src="/image/envelop.png" alt="envelope">

            </button>
        </div>

    </div>
    <form id="datainsert">
        <div class="row form" id="write">
            <div class="col-sm-3 col-sm-offset-1">
                Имя <span class="star">&#9733;</span><br>
                <input type="text" autofocus required pattern="^[A-ZА-ЯЁ][А-Яа-яЁёA-Za-z\s]+$" id="name">
            </div>
            <div class="col-sm-3 col-sm-offset-2">
                Комментарий <span class="star">&#9733;</span><br>
                <input type="text" required   pattern="^[A-ZА-ЯЁ][А-Яа-яЁёA-Za-z!\-,.\s&#34;]+$" id="comment">
            </div>
        </div>
        <div class="row form">
            <div class="col-sm-3 col-sm-offset-1">
                E-Mail <span class="star">&#9733;</span><br>
                <input type="email" required id="email">
            </div>
        </div>
        <input hidden type="text"  id="session" value ="<?=session_id()?>">
        <div class="row select">
            <div class="col-sm-2 col-sm-offset-9">
                <button  type="button" id="save">Записать</button>
            </div>
        </div>
    </form>
    <div id="message" class = "row comments"></div>
    <div class = "row output_comments comments">Выводим комментарии</div>
    <div class="row comments" id="list">
    </div>
    <div class="row footer">
        <div class="company col-sm-3 col-sm-offset-1">
            <a href="#"><img  src="http://honey-hunters.ru/public/img/logo_50.png"
                              alt="logo">
                <span class="hhs">HoneyHunters</span></a>
        </div>
        <div class="col-sm-1 social col-sm-offset-6">
            <a href="#">
                <i class="fa fa-vk"></i></a>
            <a href="#">
                <i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>
</body>
</html>
