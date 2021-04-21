@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>childregistration</title>
    <style>
        .container {
            background-color: papayawhip;
        }
        .cont {
            position: absolute;
            top: 100px;
            color:papayawhip;
        }
        body {
            background-color: cadetblue;
        }
        .submit { background-color:PapayaWhip; color: indigo; padding: 10px; text-align: center; font-weight: bold;}
        .submit:hover {background-color:pink; color:cadetblue;}
        form {margin: 20px;}
        h1 {margin: 20px;}
    </style>
</head>
<body>
    <div class = "cont">
        <h1>Create a child profile!</h1>
        <form method="POST" action="submit">
            @csrf
            <label for="First_name">First name:</label><br>
            <input type="text" id="First_name" name="First_name"><br><br>
            <label for="Birth_date">Birth date:</label><br>
            <input type="date" id="Birth_date" name="Birth_date"><br><br><br>
            <input class = "submit" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>