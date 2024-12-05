<?php
const AGREE_LICENSE=true;

include __DIR__.'/../vendor/autoload.php';
$setup=include __DIR__.'/../src/setup.php';
$setup['router/uri']['rules']=include __DIR__.'/../src/route.php';

(new \your_project\app($setup))->run();
