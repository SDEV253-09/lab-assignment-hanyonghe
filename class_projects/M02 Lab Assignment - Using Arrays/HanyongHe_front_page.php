<?php
$picture = ['a.png','b.png','c.png'];
shuffle($picture);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My front page</title>
    <style>
    img{
      width: 100%;
      height: 100%;
    }
    </style>
  </head>
  <body>
    <?php
    $string = '<img src="'.$picture[0].'" />"';
    echo $string;
    ?>
  </body>
</html>
