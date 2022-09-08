<?php
        $mysql = new mysql("localhost","root","","siswa_rpl");
        if ($mysql -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysql -> connect_error;
            exit();
        }
?>