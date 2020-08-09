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

    private $value = [];

    function inorderTraversal($root) {
        if( $root->val == null) return [];

        $this->inorderTraversal($root->left);
        $this->value[] = $root->val;
        $this->inorderTraversal($root->right);

        return $this->value;
    }
}
