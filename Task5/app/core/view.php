<?php

class View {

    function generate($template_view, $data_array){
        if($data_array != ''){
            $data = $data_array;
        }
        else{
            $data = '';
        }
        include 'app/views/'.$template_view;
    }

}