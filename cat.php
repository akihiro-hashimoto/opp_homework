<?php

require_once('dog.php');

class cat extends dog {
    
    public function cry() 
    {
        echo 'にゃ〜〜';
        echo '<br>';
    }

    public function bilingual()
    {
        echo 'ごはん持ってきて';
        echo '<br>';
    }
}