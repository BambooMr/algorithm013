/**
* Definition for a binary tree node.
* class TreeNode {
*     public $val = null;
*     public $left = null;
*     public $right = null;
*     function __construct($value) { $this->val = $value; }
* }
*/
//<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    private $results = [];

    function preorderTraversal($root) {
        if($root->val === null) return $this->results;

        $this->results[] = $root->val;
        $this->preorderTraversal($root->left);
        $this->preorderTraversal($root->right);

        return $this->results;
    }
}
