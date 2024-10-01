<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyProblemDAO.php");

class VplpyProblem {

    private $vpl_problem_id;
    private $vpl_problem_name;
    private $vpl_problem_title;
    private $vpl_problem_description;
    private $vpl_problem_example;
    private $vpl_problem_lang;
    private $vpl_problem_creation_date;
    private $vpl_problem_update_date;
    private $vpl_topic_id;
    private $vpl_unique_id;
    private $vplpyProblemDAO;


    /**
     * @return
     */
    public function getvpl_problem_id() {
        return $this -> vpl_problem_id;
    }
    /**
     * @return
     */
    public function getvpl_problem_name() {
        return $this -> vpl_problem_name;
    }
    /**
     * @return
     */
    public function getvpl_problem_title() {
        return $this -> vpl_problem_title;
    }
    /**
     * @return
     */
    public function getvpl_problem_description() {
        return $this -> vpl_problem_description;
    }
    /**
     * @return
     */
    public function getvpl_problem_example() {
        return $this -> vpl_problem_example;
    }
    /**
     * @return
     */
    public function getvpl_problem_lang() {
        return $this -> vpl_problem_lang;
    }
    /**
     * @return
     */
    public function getvpl_problem_creation_date() {
        return $this -> vpl_problem_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_problem_update_date() {
        return $this -> vpl_problem_update_date;
    }
    /**
     * @return
     */
    public function getvpl_topic_id() {
        return $this -> vpl_topic_id;
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
    public function getvplpyProblemDAO() {
        return $this -> vplpyProblemDAO;
    }

    public function __construct(
        $vpl_problem_id="",
        $vpl_problem_name="",
        $vpl_problem_title="",
        $vpl_problem_description="",
        $vpl_problem_example="",
        $vpl_problem_lang="",
        $vpl_problem_creation_date="",
        $vpl_problem_update_date="",
        $vpl_topic_id="",
        $vpl_unique_id="",
    ){
        $this -> vpl_problem_id = $vpl_problem_id;
        $this -> vpl_problem_name = $vpl_problem_name;
        $this -> vpl_problem_title = $vpl_problem_title;
        $this -> vpl_problem_description = $vpl_problem_description;
        $this -> vpl_problem_example = $vpl_problem_example;
        $this -> vpl_problem_lang = $vpl_problem_lang;
        $this -> vpl_problem_creation_date = $vpl_problem_creation_date;
        $this -> vpl_problem_update_date = $vpl_problem_update_date;
        $this -> vpl_topic_id = $vpl_topic_id;
        $this -> vpl_unique_id = $vpl_unique_id;
        $this -> vplpyProblemDAO = new VplpyProblemDAO(
            $this -> vpl_problem_id,
            $this -> vpl_problem_name,
            $this -> vpl_problem_title,
            $this -> vpl_problem_description,
            $this -> vpl_problem_example,
            $this -> vpl_problem_lang,
            $this -> vpl_problem_creation_date,
            $this -> vpl_problem_update_date,
            $this -> vpl_topic_id,
            $this -> vpl_unique_id,
        );
    }
}

