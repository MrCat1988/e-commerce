<?php
    Class TemplateController{
        // TEMPLATE
        public function template(){
            include "views/template.php";
        }
        // Return template styles
        static public function ctrTemplateStyle(){
            $table = "template";
            $response = ModelTemplate::mdlTemplateStyle($table);
            return $response;
        }
    }