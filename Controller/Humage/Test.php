<?php
namespace Hummingbird\Module\Controller\Humage;

class Test{
    protected $hummageTest;
    public function __construct(
        \Hummingbird\Module\Humage\Test $hummageTest
    ){
        $this->hummageTest=$hummageTest;
    }
    public function execute(){
        echo $this->hummageTest->displayParams();
    }
}