<?php

function db_connect() {
   $result = new mysqli('localhost','bm_user@localhost','password','bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
