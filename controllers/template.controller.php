<?php

class TemplateController
{
    /**--------------------------------------------------------------
     * Traemos la vista de la plantilla principal
     * --------------------------------------------------------------
     */
    public function index()
    {
        include('views/template.php');
    }
    
    /**--------------------------------------------------------------
     * Ruta principal de la app
     * --------------------------------------------------------------
     */

     public static function path()
     {
        return "http://marketplace.com/";
     }


}

?>