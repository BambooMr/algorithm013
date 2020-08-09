//<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {

        $map = [];
        foreach($strs as $key => $val) {
            $value = $this->sortByStr($val);
            $map[$value][] = $val;
        }

        return array_values($map);
    }

    function sortByStr($val)
    {
        $valArr = str_split($val);
        asort($valArr);
        return implode('', $valArr);
    }
}
