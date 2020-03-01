<?php
require "conn.php";
$userhash="c0ee0bec526a7114cb176543ad6472809c0935c45e0e4add0c34015d99a964db";
$sql = "SELECT `publickey` FROM `userhash` 	WHERE `userhash`.`hashid` = '$userhash'";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["publickey"];
    }

?>