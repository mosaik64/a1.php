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
echo times2(3)

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください
//関数名の命名規則？

function sumab($a, $b){
    return $a + $b；
}
echo sumab(2,5)

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
/*foreach文
$array = {$a, $b, &c,...}；定義する
foreach(＄array配列 as ＄value配列の値変数を代入){
    繰り返し実行する処理
}

/*function product($arr){
    for ($i = 1; $i < count($arr); $i++)
    
    return 
}*/

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
    //とりあえず配列の最初の要素を一番大きい値とする
    $max_nnumber = $arr[0];
    foreach($arr as $a){
        //ここで配列の中の一番大きい値を探したい
        
    }
    return $max_number;

}

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
/*・strip＿tags
指定した文字列(string)からNULLバイトとHTMLおよびPHPタグをt取り除く。この関数は、fgetss()関数と同じタグ除去アルゴリズムを使用する。
/*・array＿push
一つ以上の要素を配列の最後に追加する
/*・array＿merge
一つ又は複数の配列をマージする
/* ・time,mktime
日付をUnixのタイムスタンプとして取得する
/*・date
Unixタイムスタンプを書式化する

