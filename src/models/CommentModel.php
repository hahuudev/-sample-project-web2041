<?php

class Comments extends Model {
    public function getFullComments() {
        $sql = "SELECT * FROM comments";
    }
}