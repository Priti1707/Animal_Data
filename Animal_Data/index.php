<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display Data</title>
  </head>
  <body>

  <a href="submission.php">Animal Data</a>
  <br>
    <table border = 2 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
        <td>Description</td>
        <td>Life</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM animal ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["category"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><?php echo $row["life"]; ?></td>
        <td> <img src="img/<?php echo $row["image"]; ?>"  height= 100px width = 100px title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>

  </body>
</html>
