<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book-O-Rama Search Results</title>
  </head>
  <body>
    <h1>Book-O-Rama Search Results</h1>

    <?php
    //create variable name
    $searchtype = $_POST['searchtype'];
    $searchterm = trim($_POST['searchterm']);

    if(!$searchtype||!$searchterm){
      echo '<p>You have not entered search details.<br>
            Please go back and try agai.</p>';
      exit;
    }
    switch ($searchtype) {
      case 'Title':
      case 'Author':
      case 'ISBN':
        break;
      default:
        echo '<p>This is not a valid search type. <br>
             Please try again later</p>';
             exit;
    }
    $username = 'bookorama';
    $passwd = 'bookorama123';
    $host = 'localhost';
    $db_name = 'books';
    $dsn ="mysql:host=$host;dbname=$db_name";
    try{
      $db= new PDO($dsn,$username,$passwd);
      $query ="SELECT ISBN,Author,Title,Price FROM Books where $searchtype = :searchterm";
      $stmt = $db->prepare($query);
      $stmt->bindParam(':searchterm',$searchterm);
      $stmt->execute();
      echo "<p>Number of books found: ".$stmt->rowCount()."<p/>";
      while($result = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "<p><strong>Title: ".$result->Title."</strong></p>";
        echo "<p><strong>Author: ".$result->Author."</strong></p>";
        echo "<p><strong>ISBN: ".$result->ISBN."</strong></p>";
        echo "<p><strong>Price: ".$result->Price."</strong></p>";
      }
      $db =NULL;
    }catch(PDOException $e){
      echo "Error: ".$e.getMessage();
      exit;
    }



     ?>


  </body>
</html>
