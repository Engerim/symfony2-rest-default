<?php

namespace ACME\PROJECT\Demo\Model;

/**
 * @author Alexander Miehe <alexander.miehe@gmail.com>
 */
class Data
{
    private $title;

    private $desc;

    public function __construct($title, $desc)
    {
        $this->title = $title;
        $this->desc = $desc;
    }
}
