<?php

    class Genre{
    private $m_Genre;
        public function insertGenreToDB($link){
            $query = "Insert into Genre values('Thriller'),('Horror'),('Action')";
            mysqli_query($link,$query);
        }
    }
    $link = mysqli_connect('localhost','root','','ankit');
    $query = "Create table if not EXISTS Genre(Genre varchar(10))";
    mysqli_query($link,$query);



?>