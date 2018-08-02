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
    "TypeOfTrip": "ROUNDTRIP",
    "ClassOfService": "ECONOMY",
    "SearchAlternateDates": False,
    "SegmentDetails": [
      {
        "Origin": "CAI",
        "Destination": "JED",
        "DepartureDate": "2018-10-01T00:00:00",
        "DepartureTime": "1100"
      },
      {
        "Origin": "JED",
        "Destination": "CAI",
        "DepartureDate": "2018-10-15T00:00:00",
        "DepartureTime": "1100"
      }
    ]
  },
  "ResponseVersion": "VERSION41"
},
                         auth=('hagry@sandcti.com', '5655230E'))
print("\n")
print("London - Madina \n")
print(response.status_code)
data = response.json()
print(data)
with open('/Users/hagry/Desktop/arpuparser/option4_CAI_JED_TWOWAY_1_10_2018_15_10_2018.json', 'w') as outfile:
    json.dump(data, outfile)

print( 'done')