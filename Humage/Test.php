<?php 
namespace HummingBird\Module\Humage;

class Test {
    protected $categoryInterface;
    protected $array;
    protected $text;
    public function __construct(
        \HummingBird\Module\Api\CategoryInterfaceRepo $categoryInterface,
        array $array=[],
        $text
    )
    {
        $this->categoryInterface=$categoryInterface;
        $this->array=$array;
        $this->text=$text;
    }
    public function displayParams(){
        echo $this->array;
        echo $this->text;
    }
}