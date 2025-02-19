<?php 

class TemplateController{

    //main function template
    public function index(){
        include 'webs/views/template.php';
    }

    //main function route url https://mipage.com/
    static public function path(){

        //validate if the url is set
        if(!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])){
            return 'https://'. $_SERVER['SERVER_NAME'] . '/';
        }else{
            return 'http://'. $_SERVER['SERVER_NAME'] . '/';
        }
    }
}

?>
