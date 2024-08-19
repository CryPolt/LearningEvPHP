<?php

interface DisplayInterface {
    public function DisplayDataInterface(array $data);
}

class Display implements DisplayInterface {
    public function DisplayDataInterface(array $data){
        echo "DisplayDataInterface" . " " .$data['name'];
    }
}

$display = new Display();

$display->DisplayDataInterface(['name'=>'Vlados']);