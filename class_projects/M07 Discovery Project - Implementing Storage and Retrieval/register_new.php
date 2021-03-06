<?php
require_once('bookmark_fns.php');

$email = $_POST['email'];
$username =$_POST['username'];
$passwd = $_POST['passwd'];
$passwd2 =$_POST['passwd2'];
session_start();
try{
  if (!filled_out($_POST)){
    throw new Exception('You have not filled the form out correctily,
    please go back and try it again.');
  }
  if(!valid_email($email)){
    throw new Exception('That is not a valid email address.
    please go back and try again.');
  }
  if($passwd!=$passwd2){
    throw new Exception('The passwords you entered do not match. please go back and try again.');
  }
  if(strlen($passwd)<6||(strlen($passwd)>16)){
    throw new Exception ('Your password must be between 6 and 16 characters. Please go back and try again.');
  }
  register($username,$email,$passwd);
  $_SESSION['valid_user']=$username;
  do_html_header('Registration successful');
  echo 'Your registration was successful, go to the members page to start setting up your bookmark';
  do_html_URL('member.php','Go go members page');
  do_html_footer();
}catch(Exception $e){
  do_html_header('Problem: ');
  echo $e->getMessage();
  do_html_footer();
  exit;
}


 ?>
