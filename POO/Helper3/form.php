<?php

class Form{

    private $data;

    public function __construct()
    {
        
    }

    public function create($action)
    {
       echo '<form action="'.$action.'" method="post">';
    }
    public function end(){
        echo '</form>';
    }
    public function input($title,$type,$name){
        echo '<p><label>'.$title.'</label></p>';
        echo '<input type="'.$type.'" name="'.$name.'">';
    }
    // title , $name, $item
    public function select($title,$name,$items){
        echo '<p><label>'.$title.'</label></p>';
        echo '
        <select name="'.$name.'">
        <option value ="">Choose an option </option>';
        foreach($items as $item)
        {
            echo '<option value="'.$item.'">'.$item.'</option>';
        }
        echo '</select>';
    }
    public function radio($type,$values){
        echo '<p>Select a food:</p>';
        foreach($values as $value){
            echo '<input type="'.$type.'" name="'.$value.'" value="'.$value.'">
            <label>'.$value.'</label>';
        }
        
    }
    public function checkbox($type,$values){
        echo '<p>Select a food:</p>';
        foreach($values as $value){
            echo '<input type="'.$type.'" name="'.$value.'" value="'.$value.'">
            <label>'.$value.'</label>';
        }
    }
    public function submit($modifier){
        echo '<p><button type="submit" name="submit">'.$modifier.'</button></p>';
    }

}

?>
