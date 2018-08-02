<?


    $string = file_get_contents("Med_Lon_oneway_15_10_2018.json");


    $data = json_decode(stripslashes($string), true);
    $MainArray = $data[FlightResponse][FpSearch_AirLowFaresRS][OriginDestinationOptions][OutBoundOptions][OutBoundOption];


////print_r($MainArray);
//    echo count($MainArray);
	for($i=0;$i<count($MainArray);$i++)
	 {

        for($n=0;$n<count($MainArray[$i][FlightSegment]);$n++){
          echo $MainArray[$i][FlightSegment][$n][DepartureAirport][LocationCode];
            echo "-";
            echo  $MainArray[$i][FlightSegment][$n][ArrivalAirport][LocationCode];
            echo "\n";
            echo  $MainArray[$i][FlightSegment][$n][FlightNumber];
            echo "\n";
            
            echo  $MainArray[$i][FlightSegment][$n][DepartureDateTime];
            echo "\n";   
            
            echo  $MainArray[$i][FlightSegment][$n][ArrivalDateTime];
            echo "\n";    
            
            echo  $MainArray[$i][FlightSegment][$n][FlightDuration];
            echo "\n";           
            
            echo  $MainArray[$i][FlightSegment][$n][MarketingAirline][Code];
            echo "\n";  
            
            
             
            
            echo "-------------";
            echo "\n"; 
        }

            echo $data[FlightResponse][FpSearch_AirLowFaresRS][SegmentReference][RefDetails][$i][PTC_FareBreakdown][Adult][TotalAdultFare];
            echo "\n"; 
        
        echo "\n\n\n\n";
     
     }

?>