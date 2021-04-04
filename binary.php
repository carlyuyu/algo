<?php
$a= array(1,3,7,8,9,10,18,27,35,46,55,60,72,74,80);
//用二分查找
//满足条件索引数组，已经排序好
$search=80;//要查找的数据
$len=count($a);//个数，最大下标为$len-1
//函数，从数组$arr中的位置$begin到位置$end之间查找数据
function binary_search($arr,$s,$begin,$end){
	if($begin>$end){
		return false;
	}
	$mid= floor(($begin+$end)/2);//定位中间位置
	$mid_value=$arr[$mid];//取得中间的值
	if($mid_value == $s){
		return true;
	}else if($mid_value>$s){
		$result=binary_search($arr,$s,$begin,$mid-1);
	}else{
		$result=binary_search($arr,$s,$mid+1,$end);
	}
	return $result;
}
$v1=binary_search($a,$search,0,$len-1);
echo"结果为:";var_dump($v1);
?>