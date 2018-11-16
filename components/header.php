<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super amaing php page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .slider {
            position: relative;
            
        }
        .slide{
            position: absolute;
            top: 0;
            left: 0;
            height: 300px;
            width: 100%;    
        }
        .slide1 {
            background: red;
            z-index: 3;
        }
        .slide2 {
            background: blue;
            z-index: 2;
            
        }
        .slide3 {
            background: green;
            z-index: 1;
            
        }
        .slide-controll{
            font-size: 50px;
            color: #fff;
            position: absolute;
            z-index: 4;
            display: block;
            top: 150px;
        }
        .slide-left {
            left: 20px;
        }
        .slide-right {
            right: 20px;
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col">
            <a href="?page=1">Page 1</a>
            <a href="?page=2">Page 2</a>
            <a href="?page=3">Page 3</a>
        </div>
    </div>
