<?php
/* for ($i=1;$i<=9;$i++){	
	for ($j=1;$j<=$i;$j++) echo "$i*$j=".$i*$j."---";
	echo "<br>";
} */
//快速排序
function quickSort($arr){

  // 获取数组长度
  $length = count($arr);

  // 判断长度是否需要继续二分比较
  if($length <= 1){
    return $arr;
  }

  // 定义基准元素
  $base = $arr[0];

  // 定义两个空数组，用于存放和基准元素的比较后的结果
  $left = [];
  $right = [];

  // 遍历数组
  for ($i=1; $i <$length; $i++) { 

    // 和基准元素作比较
    if ($arr[$i] > $base) {
      $right[] = $arr[$i];
    }else {
      $left[] = $arr[$i];
    }

  }

  // 然后递归分别处理left和right
  $left = quickSort($left);
  $right = quickSort($right);

  // 合并
  return array_merge($left,[$base],$right);

}
//冒泡排序
//对于一个长度为N的数组，我们需要排序 N-1 轮，每 i 轮 要比较 N-i 次。对此我们可以用双重循环语句，外层循环控制循环轮次，内层循环控制每轮的比较次数。
function bubbleSort($arr){

  // 获取数组长度
  $length = count($arr);

  // 第一层循环控制冒泡轮次
  for ($i=0; $i < $length-1; $i++) { 

    // 内层循环控制从第0个键值和后一个键值比较，每次冒出一个最大的数
    for ($k=0; $k < $length-$i-1; $k++) { 
      if($arr[$k] > $arr[$k+1]){
        $tmp = $arr[$k+1];
        $arr[$k+1] = $arr[$k];
        $arr[$k] = $tmp;
      }
    }
  }

  return $arr;
}
//插入排序
function selectSort($arr){
	// 获取数组长度
  $length = count($arr);
  for($i =0; $i< $length -1; $i++){
	 $p = $i;//假设$p为最小值
	for($j = $i+1;$j<$length;$j++){
		if($arr[$j] < $arr[$p]){
			$p = $j;
		}
	}
	if ($p != $i) {
          $tmp = $arr[$p];
          $arr[$p] = $arr[$i];
          $arr[$i] = $tmp;
        }
  }
  return $arr;
}
$arr = array(2,13,42,34,56,23,67,365,87665,54,68,3);
$sortArr = quickSort($arr);
$bulSort = bubbleSort($arr);
$selSort = selectSort($arr);
var_dump($sortArr);
var_dump($bulSort);
var_dump($selSort);

?>