<?php

class VplpyAboutusDAO {

    private $pl_aboutus_id;
    private $pl_aboutus_title;
    private $pl_aboutus_description;
    private $pl_aboutus_footer;
    private $pl_aboutus_lang;
    private $pl_aboutus_creation_date;
    private $pl_aboutus_update_date;
    private $pl_unique_id;

    public function __construct(
        $vpl_aboutus_id="",
        $vpl_aboutus_title="",
        $vpl_aboutus_description="",
        $vpl_aboutus_footer="",
        $vpl_aboutus_lang="",
        $vpl_aboutus_creation_date="",
        $vpl_aboutus_update_date="",
        $vpl_unique_id="", 
    ) {
        $this -> vpl_aboutus_id = $vpl_aboutus_id;
        $this -> vpl_aboutus_title = $vpl_aboutus_title;
        $this -> vpl_aboutus_description = $vpl_aboutus_description;
        $this -> vpl_aboutus_footer = $vpl_aboutus_footer;
        $this -> vpl_aboutus_lang = $vpl_aboutus_lang;
        $this -> vpl_aboutus_creation_date = $vpl_aboutus_creation_date;
        $this -> vpl_aboutus_update_date = $vpl_aboutus_update_date;
        $this -> vpl_unique_id = $vpl_unique_id;
    }


}


