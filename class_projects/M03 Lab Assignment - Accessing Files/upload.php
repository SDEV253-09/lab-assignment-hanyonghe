
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uploading</title>
  </head>
  <body>
    <h1>Uploading a File...</h1>
    <?php
    if($_FILES['the_file']['error']>0){
      echo 'Problem: ';
      switch ($_FILES['the_file']['error']) {
        case 1:
            echo "File exceeded upload_max_filesize";
            break;
        case 2:
            echo "File exceeded max_file_size";
            break;
        case 3:
            echo "File only partialy upload";
            break;
        case 4:
            echo "No file uploaded.";
            break;
        case 6:
            echo "Cannot upload file: No temp directory specified.";
            break;
        case 7:
            echo "upload file failed, can not write to disk";
            break;
        case 8:
            echo "A PHP extension blocked the file upload";
            break;
      }
      exit;
    }
    echo $_FILES['the_file']['name']."<br>";
    if ($_FILES['the_file']['type'] != 'image/png') {
      echo "Problem: file is not a image.";
      exit;
    }
    $upload_file = 'uploads/'.$_FILES['the_file']['name'];
    if(is_uploaded_file($_FILES['the_file']['tmp_name']))
    {
      if(!move_uploaded_file($_FILES['the_file']['tmp_name'],$upload_file))
      {
        echo "Problem: Could not move file to destination directory.";
        exit;
      }
    }else{
      echo "Problem: possible file upload attack. File name:".$_FILES['the_file']['name'];
      exit;
    }
    echo "File upload successfully.";
    echo "<p>You uploaded the following image: <br/>";
    echo '<img src="uploads/'.$_FILES['the_file']['name'].'"/>';
     ?>
  </body>
</html>
