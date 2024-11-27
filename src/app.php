<?php
namespace your_project;

use nx\parts\control\ca;
use nx\parts\db\pdo;
use nx\parts\filter\from;
use nx\parts\model\cache;
use nx\parts\output\rest;
use nx\parts\router\uri;
use nx\parts\runtime;

class app extends \nx\app{
    use runtime, ca, uri, pdo, from, rest, cache;
}