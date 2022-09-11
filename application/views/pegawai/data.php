<?php
$cont = new mysqli("10.100.10.17", "rival", "Ramadhan123", "unramabs");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    // echo 'berhasil';
}

$data = mysqli_query($cont, 'select first_name, last_name from emp where dept_id_auto =47');

foreach ($data as $isi) {
    echo $isi['first_name'] . ' ' . $isi['last_name'] . '</br>';
}
