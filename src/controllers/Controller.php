<?php
//$Genres = ['Thriller','Action'];
use ../models/model as modelclass;
$model = new modelclass();
$Genres = $model->fetch();
echo "Hello";
include_once('../views/LandingView.php');
?>