<?php


namespace App\classes\traits;


trait getParamForGetView
{
    /**
     * @param $value
     * @param string $name
     * @return string
     */
    public function getParam($value, $name): string
    {
        if ($value){
            return sprintf('%s="%s"',$name, $value);
        }
        else{
            return '';
        }
    }
}