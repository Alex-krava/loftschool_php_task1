<?php

class Model_Users extends Model {

    function __construct()
    {

    }

    public function get_data()
    {
        $records = Users::all();
        return $records;
    }

}