<?
    include_once ('config.php');

    include_once( "header.php" );


   $city = $_GET['city'];

    $tpl = new TemplatePower( "template/$temp_name/hotels-results$city.htm" );
    $tpl->prepare();


    $tpl->printToScreen();

    include_once( "footer.php" );
?>