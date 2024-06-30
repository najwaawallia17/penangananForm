<?php
if(isset($_POST['Proses'])){
    $saran=nl2br($_POST['saran']);
    echo "Kritik / saran saudara  : <br>";
    echo "<font color=green><b>$saran</b></font>";
}
?>