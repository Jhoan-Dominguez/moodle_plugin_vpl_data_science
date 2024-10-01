<?php

class VplpyTopicDAO {

    private $vpl_topic_id;
    private $vpl_topic_name;
    private $vpl_topic_description;
    private $vpl_topic_lang;
    private $vpl_topic_creation_date;
    private $vpl_topic_update_date;

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
    }
}



