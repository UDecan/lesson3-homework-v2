<?php


namespace App\classes\inputtags;


use App\classes\traits\Text;
use App\classes\traits\TypeTrait;

class InputText extends InputTag
{
    use Text;
    use TypeTrait;

    public function __construct()
    {
        parent::__construct();
        $this->type = "text";
    }
}