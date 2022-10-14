<?php

namespace Users\Models;

class Group
{
    public int $user_id;
    public string $user_name;
    public string $user_email;
    public string $user_password;
    public int $group_id;
    

    public function __construct(int $_user_id,string $_user_name, string $_user_email, string $_user_pass, int $_group_id)
    {
        $this->uder_id= $_user_id;
        $this->user_name= $_user_name;
        $this->user_email= $_user_email;
        $this->user_password= $_user_pass;
        $this->group_id= $_group_id;   
    }
}