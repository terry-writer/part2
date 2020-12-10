<?php



function creatReview()
{
    echo "読書ログを登録してください" . PHP_EOL;
    echo "書籍名：";
    $title = trim(fgets(STDIN));
    echo "著者名：";
    $name = trim(fgets(STDIN));
    echo "読書状況：";
    $status = trim(fgets(STDIN));
    echo "感想：";
    $output = trim(fgets(STDIN));
    echo "登録が完了しました" . PHP_EOL;
    var_export($title);
    return [
        'title' => $title,
        'name' => $name,
        'status' => $status,
        'output' => $output
    ]; 
    
}

$reviews = [];

function displayReview($reviews){
    echo "読書ログを表示します test2" . PHP_EOL;
    foreach($reviews as $review){ 
           echo '書籍名：' . $review['title'] . PHP_EOL;
           echo '著者名:' . $review['name'] . PHP_EOL;
           echo '読書状況:' . $review['status'] . PHP_EOL;
           echo '評価:' . $review['output'] . PHP_EOL;
           echo '区切り---';
    
    }

}



while(true){
    echo "1.読書ログを登録" . PHP_EOL;
    echo "2.読書ログを表示" . PHP_EOL;
    echo "9.アプリケーションを終了" . PHP_EOL;
    echo "番号を選択してください(1,2,9)  ：" . PHP_EOL;
    $num = trim(fgets(STDIN));

    if($num === "1"){ 
        $reviews[] = creatReview();

    }elseif($num === "2"){
        displayReview($reviews);
        var_export($reviews);

    }elseif($num === "9"){
        var_export($reviews);
    break;
    }
}