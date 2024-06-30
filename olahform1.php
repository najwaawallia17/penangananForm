<html>
    <head> <title> Pengolahan Form cara #1 </title> </head>
        <body>
            <form action="" method="post" name="input">
                Nama panggilan anda : <input type="text" name="nama"><br>
                <input type="submit" name="input" value="tampilkan isi textbox"/><br>
            </form>
        </body>
</html>

<?php
if (isset($_POST['input'])) {
    $nama=$_POST['nama'];
    echo "Nama panggilan anda : <b>$nama</b>";
}
?>