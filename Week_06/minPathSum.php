<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {

        if ($grid == null || count($grid) == 0 || count($grid[0]) == 0) return 0;

        $map = [];
        $height = count($grid);
        $width = count($grid[0]);

        $map[0][0] = $grid[0][0];
        for($i = 1; $i< $width; $i++) $map[0][$i] = $grid[0][$i] + $map[0][$i - 1];
        for($i = 1; $i< $height; $i++) $map[$i][0] = $grid[$i][0] + $map[$i - 1][0];

        for($i = 1; $i< $height; $i++) {
            for($j = 1; $j< $width; $j++) {
                $map[$i][$j] = min($map[$i - 1][$j], $map[$i][$j - 1]) + $grid[$i][$j];
            }
        }

        return $map[$height - 1][$width - 1];

    }
}