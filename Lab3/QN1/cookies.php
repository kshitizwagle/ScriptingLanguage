<?php
// set
setcookie("language", "php", time() + 3600);
?>
<html>
    <body>
        <?php 
            echo "Cookie set<br>";
            echo "You might need to reload to see value of cookie<br>" ;
            // get
            if(isset($_COOKIE["language"])) {
                echo "Language is " . $_COOKIE["language"];
            } else {
                echo "Cookie is not set";
            }
        ?>
    </body>
</html>