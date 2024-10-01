<?php

class VplpyDAO {

    private $vpl_table_name = "local_vplpy";
    private $vpl_unique_id;
    private $vpl_creation_date;
    private $vpl_update_date;
    private $vpl_course_id;
    private $vpl_course_fullname;
    private $vpl_course_shortname;
    private $vpl_course_idnumber;

    public function __construct(
        $vpl_unique_id,
        $vpl_creation_date,
        $vpl_update_date,
        $vpl_course_id,
        $vpl_course_fullname,
        $vpl_course_shortname,
        $vpl_course_idnumber
    ) {
        $this->vpl_unique_id = $vpl_unique_id;
        $this->vpl_creation_date = $vpl_creation_date;
        $this->vpl_update_date = $vpl_update_date;
        $this->vpl_course_id = $vpl_course_id;
        $this->vpl_course_fullname = $vpl_course_fullname;
        $this->vpl_course_shortname = $vpl_course_shortname;
        $this->vpl_course_idnumber = $vpl_course_idnumber;
    }

    public function query_get_vplpy_id($vpl_course_id, $vpl_course_fullname): array|bool {
        
        $query = "SELECT * FROM {".$this->vpl_table_name."} ".
            "WHERE vpl_course_id = ? AND vpl_course_fullname = ?";
        
        $values = [$vpl_course_id, $vpl_course_fullname];

        return array(
            "query" => $query,
            "values" => $values,
        );
    }

    public function create_first_row_vplpy($moodle_course): array|bool {
        
        $values = new stdClass();
        $values->vpl_exist_default_data = 0;
        $values->vpl_creation_date = Date("Y-m-d H:i:s");
        $values->vpl_update_date = Date("Y-m-d H:i:s");
        $values->vpl_course_id = $moodle_course->id;
        $values->vpl_course_fullname = $moodle_course->fullname;
        $values->vpl_course_shortname = $moodle_course->shortname;
        $values->vpl_course_idnumber = $moodle_course->idnumber;

        return array(
            "table_name" => $this->vpl_table_name,
            "values" => $values,
        );
   
    }

}

