<?php

class VplpyProblemDAO {

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
    }
}