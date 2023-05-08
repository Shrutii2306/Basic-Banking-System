<html>
<?php
        include_once 'config.php';
        $query = "SELECT * FROM users where id='1'";
        $result = $db->query($query);
        $row =  $result->fetch_assoc();
        echo $row['name'];
        ?>
</html>
