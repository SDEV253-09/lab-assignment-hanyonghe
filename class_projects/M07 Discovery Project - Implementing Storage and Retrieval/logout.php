<?php
require_once('bookmark_fns.php');
session_start();
$old_user = $_SESSION['valid_user'];

unset($_SESSION['valid_user']);
$result_dset = session_destroy();
do_html_header("Logging out");
if(!empty($old_user)){
  if($result_dset){
    echo 'Logged out.<br>';
    do_html_url('login.php','Login');
  }else{
    echo 'Could not log you out.<br>';
  }
}else{
  echo "you are not logged in, and so you hvae not been logged out. <br>";
  do_html_url('login.php','Login');
}
do_html_footer();
 ?>
