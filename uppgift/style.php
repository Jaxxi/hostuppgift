<?php
    header('Content-type: text/css;');
    $main_color = "#FFB6C1";
 ?>
 body{
   background-color: <?=$main_color?>;
 }
 .navbar {
     position: relative;
     background-color: #FF87B9;
     padding-left: 100px;
     padding-right: 100px;
     margin-top:0px;
 }
 #big-title{
    font-size:50px;
    text-align:center;
    font-family:"Tangerine";
 }
.test {
    color: #white;
    background-color: #FF87B9;
    text-decoration: none;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom: -4px;
    border-style: solid;
    border-color: #FF87B9;
}
li {
    display: inline;
    float: left;
    height: 40px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FF87B9;
}

li a {
    display: block;
    color: white;
    background-color: #FF87B9;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    color: #FFB6C1;
    background-color: #FF69B4;
    text-decoration: none;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    border-bottom: -4px;
    border-style: solid;
    border-color: #FFB6C1;
}
