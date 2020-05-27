<?php


namespace App\classes\inputtags;


class InputHidden extends InputTag
{
    public function __construct()
    {
        parent::__construct();
        $this->type = "hidden";
    }
}