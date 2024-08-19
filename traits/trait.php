<?php

trait Display {
    protected function showThis($message){
        echo $message;
    }
}
trait SaveData {
    protected function saveThis($message){
        return $message;
    }
}

class Main {
    use Display;
    use SaveData;
    public function displayingData(): void
    {
        $this->showThis('Test trait');
    }
    public function savingData(): void
    {
        $this->saveThis('Test trait Save Data');
    }
}

//(new Main())->displayingData();
echo ((new Main())->savingData());