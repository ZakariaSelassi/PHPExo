<?php 
class Form{
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
    public function submit($modifier){
        echo '<div><button type="submit" name="submit" class="btn btn-primary mt-1" >'.$modifier.'</button></div>';
    }
}

?>