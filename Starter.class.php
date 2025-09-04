<?php
namespace FreePBX\modules;

use BMO;

class Starter implements \BMO {
    private $FreePBX;
    private $db;

    public function __construct($freepbx = null) {
        if ($freepbx == null) {
            throw new Exception("Not given a FreePBX Object");
        }
        $this->FreePBX = $freepbx;
        $this->db = $freepbx->Database;
    }

    public function install() {
        return true;
    }

    public function uninstall() {
        return true;
    }

    public function backup() {
        return true;
    }

    public function restore($backup) {
        return true;
    }

    public function doConfigPageInit($page) {
    }
    public function showPage() {

        $hello = "Hello World!";

        return load_view(__DIR__.'/views/hello.php', array('hello' => $hello));

    }
}