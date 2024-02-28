<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('./questions.db');
    }
}

// 2. Open Database 
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
}
