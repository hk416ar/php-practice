<?php
// Q1 変数と文字列
$name = '久留';
echo '私の名前は「'.$name.'」です。';

// Q2 四則演算
$num = 5 * 4;
echo "$num \n";
echo $num / 2; 

// Q3 日付操作
echo '現在時刻は、'.date('Y年m月d日 H時i分s秒').'です。';

// Q4 条件分岐-1 if文
$device = 'iOS'; 

if ($device == 'windows') {
 echo '使用OSは、windowsです。';
} else {
  if ($device == 'mac') {
 echo '使用OSは、macです。';
} else {
  echo 'どちらでもありません。';}
}

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age > 17) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$kanto = [
 '東京都', '神奈川県', '千葉県', '埼玉県', '群馬県', '茨城県', '栃木県'
];
echo $kanto[2].'と'.$kanto[3].'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto2 = [
 '東京都'=>'新宿区',
 '神奈川県'=>'横浜市',
 '千葉県'=>'千葉市',
 '埼玉県'=>'さいたま市',
 '群馬県'=>'前橋市',
 '茨城県'=>'水戸市',
 '栃木県'=>'宇都宮市'
];
foreach($kanto2 as $key=>$val){
echo "$val \n";
}

// Q8 連想配列-2
foreach ($kanto2 as $key => $val) {
  if ($val === 'さいたま市') { 
      echo $key.'の県庁所在地は、'.$val.'です。';
  }
}

// Q9 連想配列-3
$kanto2 += array('北海道'=>'札幌市','沖縄県'=>'那覇市');
foreach ($kanto2 as $key => $val) {
 if($key === '北海道'|| $key === '沖縄県'){
   echo $key."は関東地方ではありません。\n";
 }else{
   echo $key."の県庁所在地は、".$val."です。\n";
 }
}

// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。';
}
hello('田中');
hello('山田');

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
}
calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($number)
{ 
  if ($number % 2 == 0) {
  return $number.'は偶数です。';
  }elese{
  return $number.'は奇数です。';
  }
}
echo distinguishNum(37);
echo distinguishNum(710);

// Q13 関数とswitch文
function Grade($evaluateGrade) {
switch ($evaluateGrade){
  case 'A':
  case 'B':
    return '合格です。';
    break;
  case 'C':
    return '合格ですが追加課題があります。';
    break;
  case 'D':
    return '不合格です。';
    break;
  default:
   return'判定不明です。講師に問い合わせてください。';
   break;
 }
}
echo Grade('A');
echo Grade('Z');
?>