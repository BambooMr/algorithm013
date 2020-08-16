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

    private $map = [];
    private $preorderIndex = 0;
    private $preorder;
    private $inorder;


    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {

        $this->preorder = $preorder;
        $this->inorder = $inorder;
        $this->map = array_flip($inorder);

        return $this->dfs(0, count($inorder) - 1);
    }

    function dfs($start, $end) {
        if($start > $end) return null;
        $nodeval = $this->preorder[$this->preorderIndex];
        $inorderIndex = $this->map[$nodeval];
        $node = new TreeNode($nodeval);
        $this->preorderIndex++;

        $node->left = $this->dfs($start, $inorderIndex - 1);
        $node->right = $this->dfs($inorderIndex + 1,$end);
        return $node;

    }
}
