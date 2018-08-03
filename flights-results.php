<?
    include_once ('config.php');
    include_once('include/function.php');



    include_once( "header.php" );


    $tpl = new TemplatePower( "template/$temp_name/flights-results.htm" );
    $tpl->prepare();



    $to=$_GET['to'];



   if($to == 2){
    $flight[] = file_get_contents("json/london/option4_Lon_JED_roundtrip.txt");
    $flight[] = file_get_contents("json/london/option1_LON_JED_MED.txt");        
   }
   elseif($to == 3){
    $flight[] = file_get_contents("json/london/option3_LON_MED_roundtrip.txt");
    $flight[] = file_get_contents("json/london/option2_LON_MED_JED.txt");      
   }
   else{
    $flight[] = file_get_contents("json/london/option4_Lon_JED_roundtrip.txt");
    $flight[] = file_get_contents("json/london/option3_LON_MED_roundtrip.txt");
    $flight[] = file_get_contents("json/london/option1_LON_JED_MED.txt");
    $flight[] = file_get_contents("json/london/option2_LON_MED_JED.txt");       
   }


    


$tpl->assignglobal( "countFlight",count($flight)); 

    for($m=0;$m<count($flight);$m++){
      $ArrFlight = explode("\n",$flight[$m]);  

        
      $tpl->newBlock("flight");     
       
    for($i=0;$i<count($ArrFlight);$i++){
       $ArrFlightIn = explode(",",$ArrFlight[$i]) ;
        
        $price = $ArrFlightIn[0];         
         $price = number_format((float)$price, 2, '.', '');               
         $priceArr=explode(".",$price);          
         $tpl->assign( "price",$priceArr[0]);
         $tpl->assign( "price1",",$priceArr[1]");             
        
       
         $tpl->newBlock("flight_round");
        
            $tpl->assign( "FlightDuration",$ArrFlightIn[5]);
            $tpl->assign( "DepartureAirport",$ArrFlightIn[1]);
            $tpl->assign( "ArrivalAirport",$ArrFlightIn[2]);
            
            $tpl->assign( "DepartureDateTime",explodeDate($ArrFlightIn[3]));
            $tpl->assign( "ArrivalDateTime",explodeDate($ArrFlightIn[4])); 
            
        
        
          
  

        

             if($i == 1){
               $tpl->assign( "classID", "02");  
             }else{
               $tpl->assign( "classID", "01");     
             }   

    }
             
    }
    



    $tpl->printToScreen();

    include_once( "footer.php" );
?>