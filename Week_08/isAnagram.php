<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {

        if($s == $t) return true;
        if(strlen($s) != strlen($t)) return false;

        $map = [];

        for($i = 0; $i < strlen($s); $i++) {
            $key = $s[$i];
            $map[$key] = isset($map[$key]) ? ++$map[$key] : 1;
        }

        for($i = 0; $i < strlen($t); $i++) {
            $key = $t[$i];
            if(isset($map[$key])) {
                --$map[$key];
                if($map[$key] < 0) {
                    return false;
                }
            } else {
                return false;
            }
        }

        for($i = 0; $i < count($map); $i++) {
            if($map[$i] > 0) {
                return false;
            }
        }



        return true;
    }
}
