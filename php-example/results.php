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
      $db= new mysqli('localhost','bookorama','bookorama123','books');
    if(mysqli_connect_errno()){
      echo '<p>Error: Could not connect to database.<br>
           Please try again later.<p>';
           exit;
    }
    $query = "select ISBN,Author,Title,Price from Books where $searchtype = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s',$searchterm);
    $stmt->execute();
    $stmt->store_result();

    $stmt->bind_result($isbn,$author,$title,$price);

    while($stmt->fetch()){
      echo "<p><strong>Title:".$title."</strong>";
      echo "<br>Author: ".$author;
      echo "<br>ISBN: ".$isbn;
      echo "<br>Price: ".number_format($price,2)."</p>";
    }
    echo "<p>Number of books found: ".$stmt->num_rows."</p>";
    $stmt->free_result();
    $db->close();
     ?>


  </body>
</html>
