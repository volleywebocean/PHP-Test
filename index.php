<?php 


function main($arr){
$price = ["R01" => 32.95, "G01" => 24.95, "B01" => 7.95];
$reduce = [4.95, 2.95, 0];
$len = count($arr);
$total = 0;
$offerFlag = 0;
$value = 0;
for( $i = 0; $i < $len; $i++){
$value = $price[$arr[$i]];
if( $offerFlag == 0 && $arr[$i] == "R01"){
$offerFlag = 1;
}else if( $offerFlag == 1 && $arr[$i] == "R01" ){
$value /=2;
$offerFlag = 2;
}else if ( $offerFlag == 1 && $arr[$i] != "R01" ){
$offerFlag = 2;
}
$total += $value;
}
$total += ($total < 50) ? $reduce[0] : ( ($total < 90 && $total >= 50) ? $reduce[1] : $reduce[2] );

}
echo main(["B01", "B01", "R01", "R01", "R01"]);