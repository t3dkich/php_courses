<form method="get">
    Name: <input type="text" name="person"/>
    <input type="submit" value="Submit"/>
</form>


<?php
if (isset($_GET['Person1'])) {
    $name = htmlspecialchars($_GET['Person1']);
    echo "Hello, $name!";
}


