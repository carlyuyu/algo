﻿<?php
$a= array(2,4,9,3,6,7);
//用冒泡法排序数组
//规律
/*
1.数组元素为n个；
2.要比较的次数为n-1；
3.每一次要比较的个数比前一次少一个，第一次比较n个（n-1次）
4.每次一比较，如果左边数据大于右边，则交换位置
*/
echo"<br />排序之前的数组:";print_r($a);
//排序
$n=count($a);//个数
for($i=0;$i<$n-1;$i++){
	for($k=0;$k<$n-$i-1;$k++){
		if($a[$k] >$a[$k+1]){
			$t=$a[$k];
			$a[$k]=$a[$k+1];
			$a[$k+1]=$t;
		}
	}
}
echo"<br />排序之后的数组:";print_r($a);

?>