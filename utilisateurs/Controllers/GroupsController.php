<?php
namespace Users\Controllers;

/**
 * Manage groups UI actions
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 * @version 0.0.1
 * @license MIT
 */
class GroupsController
{
    /**
     * Route /?:page=groups
     * @return void
     */
    public function index() :void
    {
        require('../Views/groups.php');
    }

    /**
     * Used for add a group
     * @return void
     */
    public function Add():void
    {

    }
}


