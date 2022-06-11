<?php
if(isset($_POST['nip'],$_POST['nama'],$_POST['gp'],$_POST['bn']))
    $nip = $_POST['nip'];
    $name = $_POST['nama'];
    $gp = $_POST['gp'];
    $bn = $_POST['bn'];
    $tj = $gp * 0.05;
    $pj = $gp * 0.1;
    $gt = $gp + $bn + $tj - $pj;
    echo "======================================== </br>";
    echo "NIP  : ". $nip. "</br>";
    echo "Nama Pegawai : ". $name. "</br>";
    echo "======================================== </br>";
    echo "Gaji Pokok : Rp.". $gp. "</br>";
    echo "Bonus : Rp.". $bn. "</br>";
    echo "Tunjangan : Rp.". $tj. "</br>";
    echo "Pajak : Rp.". $pj. "</br>";
    echo "======================================== </br>";
    echo "Gaji yang harus dibayarkan : Rp.". $gt. "</br>";