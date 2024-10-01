<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyAboutusCreatorDAO.php");

class VplpyAboutusCreator {

    private $vpl_creator_id;
    private $vpl_creator_name;
    private $vpl_creator_rol;
    private $vpl_creator_description;
    private $vpl_creator_urlimage;
    private $vpl_creator_lang;
    private $vpl_creator_creation_date;
    private $vpl_creator_update_date;
    private $vpl_aboutus_id;
    private $vplpyAboutusCreatorDAO;

    /**
     * @return
     */
    public function getvpl_creator_id() {
        return $this -> vpl_creator_id;
    }
    /**
     * @return
     */
    public function getvpl_creator_name() {
        return $this -> vpl_creator_name;
    }
    /**
     * @return
     */
    public function getvpl_creator_rol() {
        return $this -> vpl_creator_rol;
    }
    /**
     * @return
     */
    public function getvpl_creator_description() {
        return $this -> vpl_creator_description;
    }
    /**
     * @return
     */
    public function getvpl_creator_urlimage() {
        return $this -> vpl_creator_urlimage;
    }
    /**
     * @return
     */
    public function getvpl_creator_lang() {
        return $this -> vpl_creator_lang;
    }
    /**
     * @return
     */
    public function getvpl_creator_creation_date() {
        return $this -> vpl_creator_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_creator_update_date() {
        return $this -> vpl_creator_update_date;
    }
    /**
     * @return
     */
    public function getvpl_aboutus_id() {
        return $this -> vpl_aboutus_id;
    }
    /**
     * @return
     */
    public function getvplpyAboutusCreatorDAO() {
        return $this -> vplpyAboutusCreatorDAO;
    }

    public function __construct(
        $vpl_creator_id="",
        $vpl_creator_name="",
        $vpl_creator_rol="",
        $vpl_creator_description="",
        $vpl_creator_urlimage="",
        $vpl_creator_lang="",
        $vpl_creator_creation_date="",
        $vpl_creator_update_date="",
        $vpl_aboutus_id="",
    ) {
        $this -> vpl_creator_id = $vpl_creator_id;
        $this -> vpl_creator_name = $vpl_creator_name;
        $this -> vpl_creator_rol = $vpl_creator_rol;
        $this -> vpl_creator_description = $vpl_creator_description;
        $this -> vpl_creator_urlimage = $vpl_creator_urlimage;
        $this -> vpl_creator_lang = $vpl_creator_lang;
        $this -> vpl_creator_creation_date = $vpl_creator_creation_date;
        $this -> vpl_creator_update_date = $vpl_creator_update_date;
        $this -> vpl_aboutus_id = $vpl_aboutus_id;
        $this -> vplpyAboutusCreatorDAO = new VplpyAboutusCreatorDAO(
            $this -> vpl_creator_id,
            $this -> vpl_creator_name,
            $this -> vpl_creator_rol,
            $this -> vpl_creator_description,
            $this -> vpl_creator_urlimage,
            $this -> vpl_creator_lang,
            $this -> vpl_creator_creation_date,
            $this -> vpl_creator_update_date,
            $this -> vpl_aboutus_id,
        );
    }

}