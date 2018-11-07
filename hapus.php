<?php
require'functions.php';
$id=$_GET["id"];

if( hapus ($id)>0){
    echo "
    <script>
        alert('data berhasil dhapus');
        document.location.href='index.php';
    </script>";
}else{
    echo "
    <script>
        alert('data gagal dhapus');
        document.location.href='index.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
}
?>