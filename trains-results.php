<?
    include_once ('config.php');



    include_once( "header.php" );


    $tpl = new TemplatePower( "template/$temp_name/trains-results.htm" );
    $tpl->prepare();


    $tpl->printToScreen();

    include_once( "footer.php" );
?>