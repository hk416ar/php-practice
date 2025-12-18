<?php
// Q1 tic-tac問題
for ($i=1;$i<=100;$i++) {
  if ($i % 20 === 0) {
    echo "tic-tac \n";
  } elseif ($i % 4 === 0){
    echo "tic \n";
  } elseif ($i % 5 === 0){
    echo "tac \n";
  } else {
    echo "$i \n";
  }
}


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//Q2-１
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。'
//Q2-２
foreach($personalInfos as $key=>$vals){
  echo ($key + 1).'番目の'.$vals['name'].'のメールアドレスは'.$vals['mail'].'で、電話番号は'.$vals['tel'].'です。';
  echo "\n";
 }
//Q2-３



// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$sato= new Student('150','佐藤');
echo'学籍番号'.$sato->studentId.'番の生徒は'.$sato->studentName.'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName.'は'.$lesson.'の授業に参加しました。学籍番号：'.$this->studentId;
    }
}

$sato= new Student('150','佐藤');
$sato->attend('PHP');

// Q5 定義済みクラス
//Q5-1
$date = new DateTime();
$date->sub(new DateInterval('P1M'));  
echo $date->format('Y-m-d');

//Q5-2
 $date1 = new DateTime ();
 $date2 = new DateTime ('1992-04-25');
 $diff = $date2->diff($date1);
 echo $diff->format('あの日から%a日経過しました。');