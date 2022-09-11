<?php
$cont = new mysqli("10.100.10.17", "rival", "Ramadhan123", "unramabs");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    $abssentoday =  'SELECT att_log.scan_date, emp.first_name, emp.last_name
    FROM att_log
    JOIN emp ON att_log.pin = emp.pin
    WHERE emp.dept_id_auto =47
    AND att_log.scan_date
    BETWEEN "' .  date("Y-m-d") . ' 00:00:00"
    AND "' . date("Y-m-d") . ' 23:59:00"';

    $dosen = 'select first_name, last_name,pin from emp where dept_id_auto = 47 ';

    $dummy = 'select emp.first_name, emp.last_name, emp.status2, att_log.scan_date from emp left join att_log on emp.pin = att_log.pin 
    where 
        emp.dept_id_auto =47 
    ';
    // echo $dosen;
}

$data = mysqli_query($cont, $dosen);
// var_dump($data);
?>
<div class="row p-2 bg-light">
    <?php foreach ($data as $row) {
        $que =  'SELECT * FROM att_log
    
        WHERE pin =' . $row['pin'] . '
        AND att_log.scan_date
        BETWEEN "' .  date("Y-m-d") . ' 00:00:00"
        AND "' . date("Y-m-d") . ' 23:59:00"';
        $jum = mysqli_query($cont, $que);
        $data = mysqli_num_rows($jum);
        // var_dump($data);
    ?>
        <div class="col-md-3 mb-3">
            <div class="ibox-content text-center">
                <h1><?= $row['first_name'] . ' ' . $row['last_name'] ?></h1>
                <div class="m-b-sm">
                    <img alt="image" class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYrdRaHhPdfxzvO46prSeLG6k5c_5u8FBgxg&usqp=CAU">
                </div>
                <p class="font-bold"><?= var_dump($data) ?></p>

                <div class="text-center">
                    <?php if ($data > 0) { ?>
                        <?php
                        $sql =  'SELECT status2 FROM emp
    
                            WHERE pin =' . $row['pin'];
                        $result = mysqli_query($cont, $sql);
                        // Associative array
                        $row = $result->fetch_array(MYSQLI_ASSOC);

                        ?>
                        <a href="" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> <?= $row['status2'] ?> <?= ' ' . $data ?></a>
                    <?php } else { ?>
                        <a href="" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Tidak Hadir <?= ' ' . $data ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
<nav aria-label="Page navigation example bg-light">
    <ul class="pagination justify-content-center bg-light  pb-2">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
</div>