<?php

for($i=0;$i<10;$i++){
    var_dump($i);
}

for($i=9;$i>=0;$i--){
    var_dump($i);
}

for($i=1;$i<1000000;$i*=2){
    var_dump($i);
}

for($i=1;$i>0;$i++){
    if($i%2 == 0){
        continue;
    }
    if($i>100){
        break;
    }
    var_dump($i);

}