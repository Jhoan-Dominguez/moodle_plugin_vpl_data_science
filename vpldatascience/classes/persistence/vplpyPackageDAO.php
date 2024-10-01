<?php

class VplpyPackageDAO {

    private $vpl_packg_id;
    private $vpl_packg_name;
    private $vpl_packg_version;
    private $vpl_packg_url;
    private $vpl_packg_creation_date;
    private $vpl_packg_update_date;
    private $vpl_unique_id;

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
    }
}









