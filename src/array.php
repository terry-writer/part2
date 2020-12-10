<?php
while(true){
    if(i !== 10){
    $comics = ['火の鳥','鉄腕アトム'];

    echo '追加してください';

    $comics[] = fgets(STDIN);
    $comics[] = fgets(STDIN);


    var_export($comics);

    i = i+1;
    }else{
        echo '終了します';
    break;
    }
}