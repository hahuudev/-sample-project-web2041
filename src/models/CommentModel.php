<?php

class CommentModel extends Model
{
    public function getFullComments()
    {
        $sql = "SELECT * FROM comments";
    }

    public function getCommentsByPrdId($id)
    {
        $sql = "SELECT cmt.created_at, cmt.content, users.username  FROM comments cmt  
        JOIN users ON cmt.userId = users.id JOIN products prd ON cmt.productId = prd.id WHERE cmt.productId = $id
        ORDER BY  cmt.created_at DESC
        ";

        return $this->query($sql, 'FETCHAll');
    }

    public function addComment($userId, $productId, $content)
    {
        var_dump($userId);
        $sql = "INSERT INTO comments (userId, productId, content) VALUE ($userId, $productId, '$content')";
        return $this->query($sql);
    }
}
