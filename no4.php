<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PHP</title>
</head>
<body>
    <?php
    $namaLengkap = '';
    $kelas = '';

    $namaLengkaperror = '';
    $kelaserror = '';

    function dataType($datakelas)
    {
        $inputData = trim($datakelas);
        $inputData = stripslashes($datakelas);
        $inputData = htmlspecialchars($datakelas);
        return $inputData;
    }

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(empty($_POST['namaLengkap'])){
            $namaLengkaperror = 'nama lengkap tidak boleh kosong!';
        }else{
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if(empty($_POST['kelas'])) {
            $kelaserror = "kelas tidak boleh kosong";
        }else {
            $kelas = dataType($_POST['kelas']);
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST">
        <div style="margin-bottom: 3px;">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" id="namaLengkap" name="namaLengkap">
            <span style="color:red; font-size:12px;"><?php echo $namaLengkaperror;  ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas">
            <span style="color:red; font-size:12px;"><?php echo $kelaserror;  ?></span>
        </div>
        <button type="submit">Simpan</button>
    </form>

    <?php 
    echo "nama saya adalah" . $namaLengkap;
    echo "<br>";
    echo "kelas saya saat ini" . $kelas;
    ?>
</body>
</html>