<?php
    require_once '../controllers/template.controller.php';
    require_once '../models/template.model.php';

    class TemplateAjax{
        static public function ajaxTemplateStyle(){
            $response = TemplateController::ctrTemplateStyle();
            echo json_encode($response);
        }
    }

    $obj = new TemplateAjax();
    $obj->ajaxTemplateStyle();