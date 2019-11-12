<?php
namespace Lance\PackageTest;

class test{
    public function execute(){
        echo 'this is a test';
    }

    public function getConfig(){
        print_r(config('test'));
    }
}
