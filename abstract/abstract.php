<?php

abstract class Cars {
    protected $color = 'Black';
    protected $brand = 'BMW';

    public function showBrand(){
        return $this->brand;
    }
    abstract public function hideBrand($brand);
}

class BMW extends Cars {
    public function displayData(){
        return $this->showBrand();
    }

    public function hideBrand($brand)
    {
        echo $brand;
    }
}

//(new Cars())->showBrand();

//echo(new BMW())->displayData();

(new BMW())->hideBrand('Mercedes');