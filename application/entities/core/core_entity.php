<?php

namespace app\entities\core;

class core_entity
{
    public $view;
    public $title;
    public $subtitle;
    public $type;
    public $content;
    public $data;

    // Getter ve Setter for $view
    public function getView()
    {
        return $this->view;
    }

    public function setView($view)
    {
        $this->view = $view;
        return $this;
    }

    public function getType()
    {

        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getData()
    {

        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    // Getter ve Setter for $title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    // Getter ve Setter for $subtitle
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    // Getter ve Setter for $content
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}


?>