<?php
public function maximumArrayDifferenceValue($array){
    $difference = 0;
    $sum = 0;
    $returnArray = array();
    for($i = 0; $i < count($array); $i++){
        $j=$i+1;
        if($array[$j] > $array[$i]){
            if($difference == 0){
                $difference = $array[$j] - $array[$i];
                $largestDifference = $newDifference;
            }
            else{
                $newDifference = $array[$j] - $array[$i];
                if($newDifference > $difference){
                    $largestDifference = $newDifference;
                    $sum+=$largestDifference;
                }
                else{
                    $difference = $newDifference;
                    $sum+=$difference;
                }
            }
        }
    }

    $returnArray[0] = $sum;
    $returnArray[1] = $largestDifference;

    return $returnArray;
}