<?php

class VplpyTestDAO {

    private $vpl_test_id;
    private $vpl_test_function_name;
    private $vpl_test_function_code;
    private $vpl_test_creation_date;
    private $vpl_test_update_date;
    private $vpl_unique_id;

    public function __construct(
        $vpl_test_id="",
        $vpl_test_function_name="",
        $vpl_test_function_code="",
        $vpl_test_creation_date="",
        $vpl_test_update_date="",
        $vpl_unique_id="",
    ){
        $this -> vpl_test_id = $vpl_test_id;
        $this -> vpl_test_function_name = $vpl_test_function_name;
        $this -> vpl_test_function_code = $vpl_test_function_code;
        $this -> vpl_test_creation_date = $vpl_test_creation_date;
        $this -> vpl_test_update_date = $vpl_test_update_date;
        $this -> vpl_unique_id = $vpl_unique_id;
    }
}