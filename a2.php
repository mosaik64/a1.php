<?php
//1.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください
/*if(条件){
    条件を満たしたときの処理；
}else{
    条件を満たさないときの処理
}*/
$name = "Misako";
if ($name =="Misako") {
    echo ("私はみさこです");
}else{
  echo ("私はみさこではありません");
}.PHP_E0L

//2.for文を使って、1から10000までの合計の値を表示してください
/*for (スタート値integer/index;継続条件integer/index；増減式$i++){
    繰り返す処理
}*/
$sum = 0; 
for ($i = 1; $i <=10000; $i++){
   $sum += &i; 
} 
echo $sum.PHP_E0L

//3.$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$fruits = array("apple","strawberry","banana","orange","grapes");
foreach($fruits as $fruits){
    echo $fruits.PHP_E0L;
}
//4.応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}