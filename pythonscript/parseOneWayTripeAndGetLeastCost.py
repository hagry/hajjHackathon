import requests

import json
import requests

from pprint import pprint

## this code to extract the data from the json file downloaded for the round trip

filePath  = '/Users/hagry/Desktop/arpuparser/option2_JED_LON_oneway_15_10_2018.json'
print (filePath)
with open(filePath) as f:
    data = json.load(f)

lowestprice = 100000000000;
lowestpriceData = [] ;
for k in data.get("FlightResponse").get("FpSearch_AirLowFaresRS").get("SegmentReference").get("RefDetails"):
   ## print ( k)
   ## print (k.get("PTC_FareBreakdown").get("Adult").get("TotalAdultFare"))
    value = k.get("PTC_FareBreakdown").get("Adult").get("TotalAdultFare")
    if ( value < lowestprice  ):
        lowestprice = value
        lowestpriceData = k

print ("lowest price ")
print (lowestprice)
print (lowestpriceData)
print(lowestpriceData.get("FlightDuration"))

outboundoptionID = lowestpriceData.get("OutBoundOptionId" )[0]


outbound  = []
inbound =[]
print( "Outbound")
for b in data.get("FlightResponse").get("FpSearch_AirLowFaresRS").get("OriginDestinationOptions").get("OutBoundOptions").get("OutBoundOption"):
    if (b.get("Segmentid") == outboundoptionID):
        outbound = b


print (str(lowestprice)+","+ outbound.get("FlightSegment")[0].get("DepartureAirport").get("LocationCode")
       + ","+outbound.get("FlightSegment")[-1].get("ArrivalAirport").get("LocationCode")
       + "," + outbound.get("FlightSegment")[0].get("DepartureDateTime")
       + "," + outbound.get("FlightSegment")[-1].get("ArrivalDateTime") )
