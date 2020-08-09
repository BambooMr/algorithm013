/**
* Definition for a Node.
* class Node {
*     public $val = null;
*     public $children = null;
*     function __construct($val = 0) {
*         $this->val = $val;
*         $this->children = array();
*     }
* }
*/
//<?php
class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */

    private $results = [];

    function preorder($root) {
        if($root == null) return $this->results;

        $this->dfs($root);

        return $this->results;
    }

    function dfs($root) {
        if($root == null) return $this->results;

        $this->results[] = $root->val;

        foreach ($root->children as $children) {
            $this->dfs($children);
        }
    }
}
