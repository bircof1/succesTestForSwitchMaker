<?php

if(! function_exists('page_title') ){
    function page_title($title){
        if($title === ""){
            return "switchMaker|ProduitBio";
        }else{
            return "switchMaker|ProduitBio|".$title;
        }
    }
}