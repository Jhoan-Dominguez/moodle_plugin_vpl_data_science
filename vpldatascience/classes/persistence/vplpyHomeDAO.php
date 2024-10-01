<?

class VplpyHomeDAO {

    private $vpl_home_id;
    private $vpl_home_title;
    private $vpl_home_description;
    private $vpl_home_footer;
    private $vpl_home_lang;
    private $vpl_home_creation_date;
    private $vpl_home_update_date;
    private $vpl_unique_id;

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
    }
}

