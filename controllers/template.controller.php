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
}

?>