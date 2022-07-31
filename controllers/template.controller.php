<?php

class TemplateController
{
    /**--------------------------------------------------------------
     * Traemos la vista de la plantilla principal
     * --------------------------------------------------------------
     */
    public function index():void
    {
        include('views/template.php');
    }
    
    /**--------------------------------------------------------------
     * Ruta principal de la app
     * --------------------------------------------------------------
     */

     public static function path():string
     {
        return "http://marketplace.com/";
     }


}

?>