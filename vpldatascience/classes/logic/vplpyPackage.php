<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyPackageDAO.php");


class VplpyPackage {

    private $vpl_packg_id;
    private $vpl_packg_name;
    private $vpl_packg_version;
    private $vpl_packg_url;
    private $vpl_packg_creation_date;
    private $vpl_packg_update_date;
    private $vpl_unique_id;
    private $vplpyPackageDAO;


    /**
     * @return
     */
    public function getvpl_packg_id() {
        return $this -> vpl_packg_id;
    }
    /**
     * @return
     */
    public function getvpl_packg_name() {
        return $this -> vpl_packg_name;
    }
    /**
     * @return
     */
    public function getvpl_packg_version() {
        return $this -> vpl_packg_version;
    }
    /**
     * @return
     */
    public function getvpl_packg_url() {
        return $this -> vpl_packg_url;
    }
    /**
     * @return
     */
    public function getvpl_packg_creation_date() {
        return $this -> vpl_packg_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_packg_update_date() {
        return $this -> vpl_packg_update_date;
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
    public function getvplpyPackageDAO() {
        return $this -> vplpyPackageDAO;
    }

    public function __construct(
        $vpl_packg_id="",
        $vpl_packg_name="",
        $vpl_packg_version="",
        $vpl_packg_url="",
        $vpl_packg_creation_date="",
        $vpl_packg_update_date="",
        $vpl_unique_id="",
    ) {
        $this -> vpl_packg_id = $vpl_packg_id;
        $this -> vpl_packg_name = $vpl_packg_name;
        $this -> vpl_packg_version = $vpl_packg_version;
        $this -> vpl_packg_url = $vpl_packg_url;
        $this -> vpl_packg_creation_date = $vpl_packg_creation_date;
        $this -> vpl_packg_update_date = $vpl_packg_update_date;
        $this -> vpl_unique_id = $vpl_unique_id;
        $this -> vplpyPackageDAO = new VplpyPackageDAO(
            $this -> vpl_packg_id,
            $this -> vpl_packg_name,
            $this -> vpl_packg_version,
            $this -> vpl_packg_url,
            $this -> vpl_packg_creation_date,
            $this -> vpl_packg_update_date,
            $this -> vpl_unique_id,
        );
    }
}