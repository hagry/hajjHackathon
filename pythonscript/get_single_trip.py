import requests

import json

print("\n")
response = requests.post("https://api-dev.fareportallabs.com/air/api/search/searchflightavailability", json={
  "FlightSearchRequest": {
    "Adults": 1,
    "Child": 0,
    "Seniors": 0,
    "InfantInLap": 0,
    "InfantOnSeat": 0,
    "Youths": 0,
    "Kid": 0,
    "TypeOfTrip": "ONEWAY",
    "ClassOfService": "ECONOMY",
    "SearchAlternateDates": False,
    "SegmentDetails": [
      {
        "Origin": "CAI",
        "Destination": "JED",
        "DepartureDate": "2018-10-1T00:00:00",
        "DepartureTime": "1100"
      }
    ]
  },
  "ResponseVersion": "VERSION41"
},
                         auth=('hagry@sandcti.com', '5655230E'))
print("\n")
print("MED - LON ONE WAY \n")


data = response.json()

with open('/Users/hagry/Desktop/arpuparser/option2_CAI_JED_oneway_1_10_2018.json', 'w') as outfile:
    json.dump(data, outfile)
