<?php 
namespace Hummingbird\Module\Humage;

class Test {
    protected $categoryInterface;
    protected $array;
    protected $text;
    public function __construct(
        \Hummingbird\Module\Api\CategoryInterface $categoryInterface,
        array $array=[],
        $text="hiii"
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