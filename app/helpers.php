<?php 
function getUrl(){
    return App\Models\User::with('userUrl')->get()->toArray();
    
}
?>