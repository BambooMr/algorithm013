//<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $file = 0;
        $ten = 0;
        foreach($bills as $bill) {
            if($bill == 5) {
                $file++;
            } else if($bill == 10) {
                if($file == 0) return false;
                $file--;
                $ten++;
            } else {
                if($file > 0 && $ten > 0) {
                    $file--;
                    $ten--;
                } else if($file >= 3) {
                    $file -=3;
                } else {
                    return false;
                }
            }
        }

        return true;
    }
}
