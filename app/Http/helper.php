
<?php
 
 if(!function_exists('generate_slug')){

    function generate_slug($value){
        return \Illuminate\Support\Str::slug($value);
    }
 }