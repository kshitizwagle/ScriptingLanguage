<?php
// set
setcookie("Drink", "Dr. Pepper");
?>
<html>

<body>
    <?php
    // get
    if (isset($_COOKIE["Drink"])) {
        echo "Cookie set<br>";
        echo "Drink is " . $_COOKIE["Drink"];
    } else {
        echo "Cookie is not set ";
        echo "You might need to reload to see value of cookie";
    }
    ?>
</body>

</html>