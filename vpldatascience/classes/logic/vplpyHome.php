<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyHomeDAO.php");

class VplpyHome {

    private $vpl_home_id;
    private $vpl_home_title;
    private $vpl_home_description;
    private $vpl_home_footer;
    private $vpl_home_lang;
    private $vpl_home_creation_date;
    private $vpl_home_update_date;
    private $vpl_unique_id;
    private $vplpyHomeDAO;


    /**
     * @return
     */
    public function getvpl_home_id() {
        return $this -> vpl_home_id;
    }
    /**
     * @return
     */
    public function getvpl_home_title() {
        return $this -> vpl_home_title;
    }
    /**
     * @return
     */
    public function getvpl_home_description() {
        return $this -> vpl_home_description;
    }
    /**
     * @return
     */
    public function getvpl_home_footer() {
        return $this -> vpl_home_footer;
    }
    /**
     * @return
     */
    public function getvpl_home_lang() {
        return $this -> vpl_home_lang;
    }
    /**
     * @return
     */
    public function getvpl_home_creation_date() {
        return $this -> vpl_home_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_home_update_date() {
        return $this -> vpl_home_update_date;
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
    public function getvplpyHomeDAO() {
        return $this -> vplpyHomeDAO;
    }

    public function __construct(
        $vpl_home_id="",
        $vpl_home_title="",
        $vpl_home_description="",
        $vpl_home_footer="",
        $vpl_home_lang="",
        $vpl_home_creation_date="",
        $vpl_home_update_date="",
        $vpl_unique_id="",
    ) {
        $this -> vpl_home_id = $vpl_home_id;
        $this -> vpl_home_title = $vpl_home_title;
        $this -> vpl_home_description = $vpl_home_description;
        $this -> vpl_home_footer = $vpl_home_footer;
        $this -> vpl_home_lang = $vpl_home_lang;
        $this -> vpl_home_creation_date = $vpl_home_creation_date;
        $this -> vpl_home_update_date = $vpl_home_update_date;
        $this -> vpl_unique_id = $vpl_unique_id;
        $this -> vplpyHomeDAO = new VplpyHomeDAO(
            $this -> vpl_home_id,
            $this -> vpl_home_title,
            $this -> vpl_home_description,
            $this -> vpl_home_footer,
            $this -> vpl_home_lang,
            $this -> vpl_home_creation_date,
            $this -> vpl_home_update_date,
            $this -> vpl_unique_id,
        );
    }
}
