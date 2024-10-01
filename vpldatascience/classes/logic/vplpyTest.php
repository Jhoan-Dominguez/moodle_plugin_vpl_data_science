<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/VplpyTestDAO.php");
class VplpyTest {

    private $vpl_test_id;
    private $vpl_test_function_name;
    private $vpl_test_function_code;
    private $vpl_test_creation_date;
    private $vpl_test_update_date;
    private $vpl_unique_id;
    private $vplpyTestDAO;

    /**
     * @return
     */
    public function getvpl_test_id() {
        return $this -> vpl_test_id;
    }
    /**
     * @return
     */
    public function getvpl_test_function_name() {
        return $this -> vpl_test_function_name;
    }
    /**
     * @return
     */
    public function getvpl_test_function_code() {
        return $this -> vpl_test_function_code;
    }
    /**
     * @return
     */
    public function getvpl_test_creation_date() {
        return $this -> vpl_test_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_test_update_date() {
        return $this -> vpl_test_update_date;
    }
    /**
     * @return
     */
    public function getvpl_unique_id() {
        return $this -> vpl_unique_id;
    }
    /**
     * @return
     */
    public function getvplpyTestDAO() {
        return $this -> vplpyTestDAO;
    }

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
        $this -> vplpyTestDAO = new VplpyTestDAO(
            $this -> vpl_test_id,
            $this -> vpl_test_function_name,
            $this -> vpl_test_function_code,
            $this -> vpl_test_creation_date,
            $this -> vpl_test_update_date,
            $this -> vpl_unique_id,
        );
    }
}