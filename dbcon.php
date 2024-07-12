<?php

$con = new mysqli("127.0.0.1", "root", "", "birthanddeath");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
