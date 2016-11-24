<?php
class Users extends CI_Controller {

    /**
    * @route http://proyect/users
    * @verb GET
    */
    public function get()
    {
        echo "Get User";
    }

    /**
    * @route http://proyect/users
    * @verb POST
    */
    public function store()
    {
        echo "Add User";
    }

    /**
    * @route http://proyect/users
    * @verb PUT
    */
    public function update()
    {
        echo "Update User";
    }

    /**
    * @route http://proyect/users
    * @verb DELETE
    */
    public function delete()
    {
        echo "Delete User";
    }

}