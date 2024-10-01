<?php

global $CFG;
require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyDAO.php");

class Vplpy {
    
    private $vpl_unique_id;
    private $vpl_creation_date;
    private $vpl_update_date;
    private $vpl_course_id;
    private $vpl_course_fullname;
    private $vpl_course_shortname;
    private $vpl_course_idnumber;
    private $vplpyDAO;

    /**
     * @return
     */
    public function getvpl_unique_id() {
        return $this -> vpl_unique_id;
    }
    /**
     * @return
     */
    public function getvpl_creation_date() {
        return $this -> vpl_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_update_date() {
        return $this -> vpl_update_date;
    }
    /**
     * @return
     */
    public function getvpl_course_id() {
        return $this -> vpl_course_id;
    }
    /**
     * @return
     */
    public function getvpl_course_fullname() {
        return $this -> vpl_course_fullname;
    }
    /**
     * @return
     */
    public function getvpl_course_shortname() {
        return $this -> vpl_course_shortname;
    }
    /**
     * @return
     */
    public function getvpl_course_idnumber() {
        return $this -> vpl_course_idnumber;
    }

    public function __construct(
        $vpl_unique_id="",
        $vpl_creation_date="",
        $vpl_update_date="",
        $vpl_course_id="",
        $vpl_course_fullname="",
        $vpl_course_shortname="",
        $vpl_course_idnumber=""
    ) {
        
        $this  -> vpl_unique_id = $vpl_unique_id;
        $this  -> vpl_creation_date = $vpl_creation_date;
        $this  -> vpl_update_date = $vpl_update_date;
        $this  -> vpl_course_id = $vpl_course_id;
        $this  -> vpl_course_fullname = $vpl_course_fullname;
        $this  -> vpl_course_shortname = $vpl_course_shortname;
        $this  -> vpl_course_idnumber = $vpl_course_idnumber;
        $this -> vplpyDAO = new vplpyDAO(
            $this  -> vpl_unique_id,
            $this  -> vpl_creation_date,
            $this  -> vpl_update_date,
            $this  -> vpl_course_id,
            $this  -> vpl_course_fullname,
            $this  -> vpl_course_shortname,
            $this  -> vpl_course_idnumber,
        );
    
    }

    public function query_get_vplpy_id($moodle_db, $vpl_course_id="", $vpl_course_fullname="") {

        if ($vpl_course_id == "" && $vpl_course_fullname == "") {return false;}

        $response = $this -> vplpyDAO -> query_get_vplpy_id(
            $vpl_course_id,
            $vpl_course_fullname
        );

        return $moodle_db -> get_record_sql($response["query"], $response["values"]);
    }

    public function create_first_row_vplpy($moodle_db, $moodle_course) {
        
        if (empty($moodle_course->id) && empty($moodle_course->fullname) && empty($moodle_course->shorname) &&
            empty($moodle_course->idnumber)) {return false;}
        
        $response = $this -> vplpyDAO -> create_first_row_vplpy($moodle_course);

        try {
            $transaction = $moodle_db->start_delegated_transaction();
            $id = $moodle_db->insert_record(
                $response["table_name"],~
                $response["values"],
                true,
                false
            );
            $transaction->allow_commit();

            return $response["values"];

        } catch (Exception $e) {
            $transaction->rollback($e);
            return false;
        }
    }

    public function start_vplpy($moodle_cfg, $moodle_db, $moodle_course) {

        if (!empty($moodle_cfg->local_vpldatascience_activatevpl) &&
            !empty($moodle_cfg->local_vpldatascience_courses)) {
            
            $vpl_exist = $this -> query_get_vplpy_id($moodle_db, $moodle_course->id, $moodle_course->fullname);
            
            if ($vpl_exist) {
                return $vpl_exist;

            } else {
                return $this -> create_first_row_vplpy($moodle_db, $moodle_course);
            }
        }
        
    }


}
