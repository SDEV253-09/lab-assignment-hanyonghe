<!--
Date        04/09/2020
Student     Hanyong
Assignment  M03 Lab Assignment - Accessing Data on a Webpage
-->


<?php
        // Function used to check email syntax
    function validate_email($email)
           {
            // Create the syntactical validation regular expression
            // the original regexp does not work, I change it to the another regular expression
            // the same as the example textboox page 128
            $regexp = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/';

               // php documentation say "eregi" is replace by preg_match method
           if (preg_match($regexp, $email)===0) return 0;
                  else return 1;
                }

             // Has the form been submitted?
          if (isset($_POST['submit']))
               {
                  echo "Hi ".$_POST['firstname']." ".$_POST['lastname']."!<br />";
           if (validate_email($_POST['email']))
                  echo "The address ".$_POST['email']." is valid!";
              else
                  echo "The address <strong>".$_POST['email']."</strong> is invalid!";
               }
    ?>

      <form action="subscribe.php" method="post">
              <p>
                  Firstname:<br />
                 <input type="text" name="firstname" size="20" maxlength="40" value="" />
             </p>
             <p>
                 Lastname:<br />
                <input type="text" name="lastname" size="20" maxlength="40" value="" />
            </p>

              <p>
                   Email Address:<br />
                  <input type="text" name="email" size="20" maxlength="40" value="" />
              </p>

             <input type="submit" name = "submit" value="Go!" />
      </form>
