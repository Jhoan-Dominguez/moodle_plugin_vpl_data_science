<?php

require_once($CFG->dirroot . "/local/vpldatascience/classes/persistence/vplpyTopicDAO.php");

class VplpyTopic {

    private $vpl_topic_id;
    private $vpl_topic_name;
    private $vpl_topic_description;
    private $vpl_topic_lang;
    private $vpl_topic_creation_date;
    private $vpl_topic_update_date;
    private $vplpyTopicDAO;


    /**
     * @return
     */
    public function getvpl_topic_id() {
        return $this -> vpl_topic_id;
    }
    /**
     * @return
     */
    public function getvpl_topic_name() {
        return $this -> vpl_topic_name;
    }
    /**
     * @return
     */
    public function getvpl_topic_description() {
        return $this -> vpl_topic_description;
    }
    /**
     * @return
     */
    public function getvpl_topic_lang() {
        return $this -> vpl_topic_lang;
    }
    /**
     * @return
     */
    public function getvpl_topic_creation_date() {
        return $this -> vpl_topic_creation_date;
    }
    /**
     * @return
     */
    public function getvpl_topic_update_date() {
        return $this -> vpl_topic_update_date;
    }
    /**
     * @return
     */
    public function getvplpyTopicDAO() {
        return $this -> vplpyTopicDAO;
    }

    public function __construct(
        $vpl_topic_id="",
        $vpl_topic_name="",
        $vpl_topic_description="",
        $vpl_topic_lang="",
        $vpl_topic_creation_date="",
        $vpl_topic_update_date="",
    ) {
        $this -> vpl_topic_id = $vpl_topic_id;
        $this -> vpl_topic_name = $vpl_topic_name;
        $this -> vpl_topic_description = $vpl_topic_description;
        $this -> vpl_topic_lang = $vpl_topic_lang;
        $this -> vpl_topic_creation_date = $vpl_topic_creation_date;
        $this -> vpl_topic_update_date = $vpl_topic_update_date;
        $this -> vplpyTopicDAO = new VplpyTopicDAO(
            $this -> vpl_topic_id,
            $this -> vpl_topic_name,
            $this -> vpl_topic_description,
            $this -> vpl_topic_lang,
            $this -> vpl_topic_creation_date,
            $this -> vpl_topic_update_date,
        );
    }
}