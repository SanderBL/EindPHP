<?php
    $moduleHTML = '

    <div class="Navigeerbalk">
    <a href="http://localhost:8080/PHPinladen/index.php?module=Teampagina&team=H1">Heren 1</a>
    <a href="http://localhost:8080/PHPinladen/index.php?module=Teampagina&team=U21">U21</a>
    <a href="http://localhost:8080/PHPinladen/index.php?module=Teampagina&team=U19">U19</a>
    <a href="http://localhost:8080/PHPinladen/index.php?module=Teampagina&team=U17">U17</a>
    <a href="http://localhost:8080/PHPinladen/index.php?module=Teampagina&team=U15">U15</a>
    </div>
    ';



    if(isset($_GET['team']))
    {
        $sPath = __DIR__ . DIRECTORY_SEPARATOR . $_GET['team']  . '.php';
        // print_r($sPath);
        if(file_exists($sPath))
        {
            $moduleHTML .= include($sPath);
        }
        else
        {
            $moduleHTML .= 'No team or pages found';
        }
    }

    return $moduleHTML; 
?>