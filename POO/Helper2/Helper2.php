<?php 
    class Html{
     
        public function __construct()
        {
            
        }
        public function getCss($name,$src)
        {
            echo "<link rel=$name href=$src>";
        }
        public function getMeta(){
            echo '
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="test">';
        }
        public function createJS($src){
            echo "<script src=$src>";
        }
        public function imageLink($src){
            echo '<img src="img/'.$src.'">';
        }
    }
?>