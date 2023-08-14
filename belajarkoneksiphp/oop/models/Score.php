<?php

include_once('DB.php');

class score extends DB {
    public static function all()
    {
        return parent: :connect()->quary("SELECT * FROM scores")->fetch_all(MYSQLI_ASSOC);

    }
}

?>