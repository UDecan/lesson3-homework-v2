<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\classes\MenuTag;
use App\classes\LiTag;
use App\classes\UlTag;

$menu = (new MenuTag())->setType('toolbar');
$li1 = (new LiTag())->setInner('one')->setValue(1);
$li2 = (new LiTag())->setInner('two')->setValue(2);
$li3 = (new LiTag())->setInner('three')->setValue(3)->setType('circle');
$menu->addElement($li1)->addElement($li2)->addElement($li3);
echo $menu .  "\n";

$ul = (new UlTag())->setType('square');
$ul->addElement($li1)->addElement($li2)->addElement($li3);
echo $ul . "\n";
