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
    echo '<h1>Add '.$_POST['type'].'<h1>';
    echo '<form action="N4P109formprocess.php" method="post">';
    echo '<table>';
    echo '<tr>';
    echo '<td>Name</td>';
    echo '<td>'.$_POST['name'].'</td>';
    echo '</tr><tr>';
    echo '<td>'.$_POST['type'].' Type</td>';
    echo '<td>'.$_POST['movie_type'].'</td>';
    echo '</tr><tr>';
?>
     
     <td>Year</td>
     <td><input type="numeric" name="year"/></td>
     </tr><tr>
     <?php echo '<td>'.$_POST['type'].' Description</td>'; ?>
     <td><input type="textarea" name="extra"/></td>
     </tr><tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Add" />
     </td>
    </tr>
    <?php 
        echo '<input type="hidden" name="type" value="'.$_POST['type'].'"/>';
        echo '<input type="hidden" name="name" value="'.$_POST['name'].'"/>';
        echo '<input type="hidden" name="movie_type" value="'.$_POST['movie_type'].'"/>';
        echo '<input type="hidden" name="debug" value="'.$_POST['debug'].'"/>';
    ?>
   </table>
  </form>

<?php
  if (isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
 </body>
</html>
