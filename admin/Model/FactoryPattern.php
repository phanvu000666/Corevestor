<?php
require "NewsModel.php";
require "ServicesModel.php";
require "BannerModer.php";
require "Auth.php";

class FactoryPattern{
    public function make($model){
        if($model == 'news'){
        return News::getInstance();       
        } else if($model == 'services') {
            return Services::getInstance(); 
        } else if($model == 'banner') {
            return Banner::getInstance(); 
        }else if($model == 'auth') {
            return Auths::getInstance(); 
        } else {
            return null;
        }
    }
}