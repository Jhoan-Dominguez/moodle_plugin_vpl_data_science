
<?php
require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyAboutusDAO.php");

class VplpyAboutus {
    
    private $vpl_aboutus_id;
    private $vpl_aboutus_title;
    private $vpl_aboutus_description;
    private $vpl_aboutus_footer;
    private $vpl_aboutus_lang;
    private $vpl_aboutus_creation_date;
    private $vpl_aboutus_update_date;
    private $vpl_unique_id;
    private $vplpyAboutusDAO;


    /**
     * @return
     */
    public function getvpl_aboutus_id() {
        return $this -> vpl_aboutus_id;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_title() {
        return $this -> vpl_aboutus_title;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_description() {
        return $this -> vpl_aboutus_description;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_footer() {
        return $this -> vpl_aboutus_footer;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_lang() {
        return $this -> vpl_aboutus_lang;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_creation_date() {
        return $this -> vpl_aboutus_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_update_date() {
        return $this -> vpl_aboutus_update_date;
    }
    /**
     * @return
     */
    public function getvpl_unique_id() {
        return $this -> vpl_unique_id;
    }

    public function __construct(
        $vpl_aboutus_id="",
        $vpl_aboutus_title="",
        $vpl_aboutus_description="",
        $vpl_aboutus_footer="",
        $vpl_aboutus_lang="",
        $vpl_aboutus_creation_date="",
        $vpl_aboutus_update_date="",
        $vpl_unique_id=""
    ) {
        $this -> vpl_aboutus_id = $vpl_aboutus_id;
        $this -> vpl_aboutus_title = $vpl_aboutus_title;
        $this -> vpl_aboutus_description = $vpl_aboutus_description;
        $this -> vpl_aboutus_footer = $vpl_aboutus_footer;
        $this -> vpl_aboutus_lang = $vpl_aboutus_lang;
        $this -> vpl_aboutus_creation_date = $vpl_aboutus_creation_date;
        $this -> vpl_aboutus_update_date = $vpl_aboutus_update_date;
        $this -> vpl_unique_id = $vpl_unique_id;
        $this -> vplpyAboutusDAO = new VplpyAboutusDAO(
            $this -> vpl_aboutus_id,
            $this -> vpl_aboutus_title,
            $this -> vpl_aboutus_description,
            $this -> vpl_aboutus_footer,
            $this -> vpl_aboutus_lang,
            $this -> vpl_aboutus_creation_date,
            $this -> vpl_aboutus_update_date,
            $this -> vpl_unique_id
        );
    }


}

