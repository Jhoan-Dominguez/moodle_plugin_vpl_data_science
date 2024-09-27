
<?php

require_once('../../../../config.php');
global $DB, $OUTPUT, $PAGE, $CFG;

class Vplpy {
    
private $vpl_unique_id;
private $vpl_creation_date;
private $vpl_update_date;
private $vpl_course_id;
private $vpl_course_fullname;
private $vpl_course_shortname;
private $vpl_course_idnumber;


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
        $vpl_unique_id,
        $vpl_creation_date,
        $vpl_update_date,
        $vpl_course_id,
        $vpl_course_fullname,
        $vpl_course_shortname,
        $vpl_course_idnumber
    ) {
        
        $this  -> vpl_unique_id = $vpl_unique_id;
        $this  -> vpl_creation_date = $vpl_creation_date;
        $this  -> vpl_update_date = $vpl_update_date;
        $this  -> vpl_course_id = $vpl_course_id;
        $this  -> vpl_course_fullname = $vpl_course_fullname;
        $this  -> vpl_course_shortname = $vpl_course_shortname;
        $this  -> vpl_course_idnumber = $vpl_course_idnumber;
    
    }



}
