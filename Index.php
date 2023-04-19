<?php

    $sHtml = '';
    $sHtml .= '<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="TempCSS.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
';
    $sHtml .= require_once("Header.php");
    $sContent = '';

    if(isset($_GET['module']))
    {
        $sModule = $_GET['module'];
        $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'Modules' . DIRECTORY_SEPARATOR . $sModule . DIRECTORY_SEPARATOR . 'index.php';    
        // print_r($sPath);
        if(file_exists($sPath))
        {
            $sContent .= include($sPath);
        }
        else
        {
            $sContent .= 'No module or pages found';
        }
    }
    $sHtml .= '
    <div class="main">
        ' . $sContent . '
    </div>';
    $sHtml .= require_once("Footer.php");
    $sHtml .= '
    </body>
</html>';

    echo $sHtml; 


?>