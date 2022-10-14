<?php

namespace Users\Models;

/**
 * Represents an user group
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 * @version 0.0.1
 */
class Group
{
    /** @var int $goup_id The user group identifier */
    public int $group_id;
    /** @var string $goup_id The user group name */
    public string $group_name;
    
    /**
     * Constructor of user_group
     *
     * @param integer $_group_id 
     * @param [type] $_group_name
     */
    public function __construct(int $_group_id, $_group_name)
    {
        $this->group_id= $_group_id;
        $this->group_name= $_group_name;

    }
}