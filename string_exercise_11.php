<!-- <?php
$a=10;
for($i=1; $i<= $a; $i++){
    // for($j=1; $j<=$a; $j++){
    //     if($i<=$j){
    //         echo("$j");
      }
    }
    echo "<br>";
} ?> -->

<?php
$n=10;
for($i=1;$i<=$n;$i++){

    for($j=1;$j<=$n;$j++){
        if($j<=($n+1)-$i){
        echo $j." ";
        }
    }
    echo "<br>";
}

?>
