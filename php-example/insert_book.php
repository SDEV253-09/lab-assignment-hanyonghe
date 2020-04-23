<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book-O-Rama Book Entry Result</title>
  </head>
  <body>
    <h1>Book-O-Rama Book Entry Result</h1>
    <?php
      if (!$_POST['ISBN']||!$_POST['Author']||!$_POST['Title']||!$_POST['Price']) {
        echo "<p>You have not entered all require information,<br>
              Please go back and try it again</p>";
        exit;
      }

      $isbn = $_POST['ISBN'];
      $author = $_POST['Author'];
      $title = $_POST['Title'];
      $price = $_POST['Price'];
      $price = doubleval($price);
      $db = new mysqli('localhost','bookorama','bookorama123','books');
      if(mysqli_connect_errno()){
        echo "<p>Sorry, Could not connect to the database,<br>
            Please try it later";
        exit;
      }
      $query ="INSERT INTO Books VALUES(?,?,?,?)";
      $stmt = $db->prepare($query);
      $stmt-> bind_param('sssd',$isbn,$author,$title,$price);
      $stmt->execute();
      if($stmt->affected_rows>0){
        echo "<p>Book inserted into the database</p>";
      }else{
        echo "<p>Error accured, the books is not added</p>";
      }
      $db->close();
      ?>
  </body>
</html>
