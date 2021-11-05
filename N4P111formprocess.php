<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
<?php

$mysqli = new mysqli('localhost', 'eric', 'aA123456789!2', 'moviesite') or die($mysqli -> error);

$query = "select movie_name from movie where movie_id = ".$_POST['movie_id'].';';

$result = $mysqli -> query($query) or die($mysqli -> error);

$row = $result -> fetch_assoc() or die($mysqli -> error);

$reviewDate = date("Y-m-d");

$query = "INSERT INTO reviews (review_movie_id, review_date, reviewer_name, review_comment, review_rating) VALUES (".$_POST['movie_id'].",\"".$reviewDate."\",\"".$_POST['username']."\",\"".$_POST['comment']."\",".$_POST['rating'].");";

$result = $mysqli -> query($query) or die($mysqli -> error);

echo '<h1>Comment added to '.$row['movie_name'].'! :D<h1>';

echo '<table>';
echo '<tr>';
echo '<td>Rating</td>';
echo '<td>' . $_POST['rating'] . '</td>';
echo '</tr><tr>';
echo '<td>Comment</td>';
echo '<td>' . nl2br($_POST['comment']) . '</td>';
echo '</tr>';
echo '</table>';
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>
 </body>
</html>