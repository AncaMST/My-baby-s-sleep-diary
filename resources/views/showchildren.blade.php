@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show my children</title>
    <style>
        .container {
            background-color: papayawhip;
        }
        .cont {
            position: absolute;
            top: 100px;
        }
        body {
            background-color:cadetblue;
        }
        h1 { color: papayawhip; margin-left: 20px;}
        ul { margin: 100px;}
        .list1 {
            width: 300px;
            border:2px solid indigo;
            list-style-position: inside;
            margin-top: 10px;
        }
        .list1:hover {
            background: pink; 
            text-decoration: none;
        }
        .links {
            color:indigo;
            text-decoration:none;
            background-color:papayawhip;
            padding: 7px;
            text-align: center;
            margin: 10px;
        }
        .sleepinfo {
            position: absolute;
            color: indigo;
            left: 300px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class = "cont">
        <h1>Your children:</h1>
        <ul>
            @foreach($children as $child)
                <li class="list1">
                {{ $child->First_name}}{{','}} {{ $child->Age_in_months}} {{'months'}}
                <a class = "sleepinfo" href ="{{route('sleepinfo', $child->Age_in_months)}}">See sleep info</a>
                </li>
            @endforeach
        </ul>
        <h1></h1>
        <a class = "links" href="http://127.0.0.1:8000/childregistration"><strong>Register another child!<strong></strong></a href>
    </div>
</body>
</html>