<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box1">URL Shortener Microservice</div>
        <div class="box2">
            <input type="text" placeholder="Enter URL">
            <div class="box3">POST URL</div>
        </div>
    </div>
</body>
</html>

<style>

    body{
        background-color: #000;
        display:flex;
        justify-content: center;
        align-items: center;
        margin:0;
        padding:0;
        width:100%;
        height:100%;
    }
    .container{
        background-color:#000;
        width:90%;
        height:50%;
        margin-top: 20%;
       
    }
    .box1{
        text-align: center;
        font-size:x-large;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding-top: 30px;
        margin-bottom: 50px;
        color:#fff;
        
    }

    .box1:hover{
        color: #e8491d;
    }

    .box2{
        display:flex;
        justify-content: center;
        padding-bottom: 30px;
    }

    input[type=text]{
        margin-right: 30px;
        height:30px;
        text-align: center;
        width:40%;
        border:2px  solid #e8491d; 

    }

    input[type=text]:focus{
        background-color:#999;
    }
    
    ::-webkit-input-placeholder {
        color:#000;
    }

    .box3{
        background-color:#e8491d;
        width:100px;
        padding-top: 10px;
        padding-left: 10px;
        color:#fff;
    }
    .box3:hover{
        background-color:#fff;
        border:2px solid #e8491d;
        color:#e8491d;
    }

</style>

