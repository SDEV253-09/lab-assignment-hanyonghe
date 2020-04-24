<?php
require_once('bookmark_fns.php');
sesstion_start();
do_html_header("Recommending URLs");
try{
  check_valid_user();
  $urls =recommend_urls($_SESSION['valid_user']);
  display_user_urls($urls);
}catch(Exception $e){
  echo $e->getMessage();
}
display_user_menu();
do_html_footer();
 ?>
