<?php
class UserModel extends Model{


    public function addUser($data)
    {
     return $this->add($data);
    }

    public function getUser()
    {
        return $this->select();
    }

    public function findUser($uid)
    {

    return $this->where(array('uid'=>$uid))->find();
    }

} 