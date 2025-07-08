<?php
namespace your_project;

use nx\parts\control\ca;
use nx\parts\db\pdo;
use nx\parts\filter\from;
use nx\parts\log\ws;
use nx\parts\model\cache;
use nx\parts\output\json;
use nx\parts\router\uri;
use nx\parts\runtime;

class app extends \nx\app{
    use ws, runtime, ca, uri, pdo, from, json, cache;
}