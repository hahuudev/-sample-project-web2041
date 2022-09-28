<?php
class UserModel extends Model
{

    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        return $this->query($sql, 'FETCH');
    }
}
