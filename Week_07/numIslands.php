<?php

class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {

        if(count($grid) == 0) return 0;

        $rows = count($grid);
        $cols = count($grid[0]);
        $grid_num = 0;

        for($i = 0; $i < $rows; $i++) {
            for($j = 0; $j < $cols; $j++) {
                if($grid[$i][$j] == 1 ) {
                    $grid_num++;
                    $queue = [];
                    array_push($queue, $i * $cols + $j);
                    while(!empty($queue)) {
                        $value = array_shift($queue);
                        $row = floor($value / $cols);
                        $col = floor($value % $cols);

                        if($row - 1 >=0 && $grid[$row - 1][$col] == 1) {
                            array_push($queue, ($row - 1) * $cols + $col);
                            $grid[$row - 1][$col] = 0;
                        }

                        if($row + 1 >=0 && $grid[$row + 1][$col] == 1) {
                            array_push($queue, ($row + 1) * $cols + $col);
                            $grid[$row + 1][$col] = 0;
                        }

                        if($col - 1 >=0 && $grid[$row][$col - 1] == 1) {
                            array_push($queue, $row * $cols + ($col - 1));
                            $grid[$row][$col - 1] = 0;
                        }

                        if($col + 1 >=0 && $grid[$row][$col + 1] == 1) {
                            array_push($queue, $row * $cols + ($col + 1));
                            $grid[$row][$col + 1] = 0;
                        }
                    }
                }
            }
        }

        return $grid_num;


    }
}
