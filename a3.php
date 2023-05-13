<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
/*function 関数名(引数名、引数名){
 実行したい処理
}
function cal($num){
 echo($num * 2);
};
ではダメなのか？*/

function times2($num){
    return $num * 2;
}
echo times2(3);
echo PHP_EOL;

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください
//関数名の命名規則？

function sumab($a, $b){
    return $a + $b;
}
echo sumab(2,5);
echo PHP_EOL;

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
/*foreach文
$array = {$a, $b, &c,...}；定義する
foreach(＄array配列 as ＄value配列の値変数を代入){
    繰り返し実行する処理
}*/

function product($array){
    $result = 1;
    foreach ($array as $value){
        $result = $result * $value;
    }
    
    return $result;  
}
echo product (array(1,3,5,7,9));
echo PHP_EOL;


//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($array){
    //とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $array[0];
    foreach($array as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(5,9,20,15,16));
echo PHP_EOL;

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
//・strip_tags
//指定した文字列(string)からNULLバイトとHTMLおよびPHPタグをt取り除く。この関数は、fgetss()関数と同じタグ除去アルゴリズムを使用する。
<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');
?>

//・array_push
//一つ以上の要素を配列の最後に追加する
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

//・array_merge
//一つ又は複数の配列をマージする
<?php
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
?>

//・time,mktime
//日付をUnixのタイムスタンプとして取得する
<?php
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
?>

//・date
//Unixタイムスタンプを書式化する
<?php
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
?>