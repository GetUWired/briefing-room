<?php

namespace BTN\BriefingRoom\Framework;

abstract class PostModel
{
    public $id;
    protected $_post;

    public function __construct($id, \WP_Post $post = null)
    {
        $this->id = $id;
        if($post) $this->_post = $post;
    }

    public function getTitle()
    {
        return ($post = $this->getPost())
            ? $post->post_title
            : '';
    }

    public function getDate($dateFormat = 'm/d/Y')
    {
        return date_format(new \DateTime($this->getPost()->post_date), $dateFormat);
    }

    public function getPost()
    {
        return $this->_post ?? $this->_post = get_post($this->id);
    }
}
