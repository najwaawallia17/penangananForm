<?php
if(isset($_POST['Pilih'])){
    echo "Boy Band K-POP Favorite kamu adalah : <br>"; 
    if(isset($_POST['band1'])){
        echo "+" .$_POST['band1'] . "<br>"; 
    }
    if(isset($_POST['band2'])){
        echo "+" .$_POST['band2'] . "<br>"; 
    }
    if(isset($_POST['band3'])){
        echo "+" .$_POST['band3'] . "<br>"; 
    }
    if(isset($_POST['band4'])){
        echo "+" .$_POST['band4'] . "<br>"; 
    }
}
?>