// Define an object for states and their associated cities
var statesAndCities = {
    Alabama: ["Birmingham", "Montgomery", "Mobile", "Huntsville"],
    Alaska: ["Anchorage", "Fairbanks", "Juneau", "Sitka"],
    Arizona: ["Phoenix", "Tucson", "Mesa", "Chandler"],
    Arkansas: ["Little Rock", "Fort Smith", "Fayetteville", "Springdale"],
    California: ["Los Angeles", "San Diego", "San Jose", "San Francisco"],
    Colorado: ["Denver", "Colorado Springs", "Aurora", "Fort Collins"],
    Connecticut: ["Bridgeport", "New Haven", "Hartford", "Stamford"],
    Delaware: ["Wilmington", "Dover", "Newark", "Middletown"],
    Florida: ["Jacksonville", "Miami", "Tampa", "Orlando"],
    Georgia: ["Atlanta", "Augusta", "Columbus", "Savannah"],
    Hawaii: ["Honolulu", "Pearl City", "Hilo", "Kailua"],
    Idaho: ["Boise", "Meridian", "Nampa", "Idaho Falls"],
    Illinois: ["Chicago", "Aurora", "Rockford", "Joliet"],
    Indiana: ["Indianapolis", "Fort Wayne", "Evansville", "South Bend"],
    Iowa: ["Des Moines", "Cedar Rapids", "Davenport", "Sioux City"],
    Kansas: ["Wichita", "Overland Park", "Kansas City", "Topeka"],
    Kentucky: ["Louisville", "Lexington", "Bowling Green", "Owensboro"],
    Louisiana: ["New Orleans", "Baton Rouge", "Shreveport", "Lafayette"],
    Maine: ["Portland", "Lewiston", "Bangor", "South Portland"],
    Maryland: ["Baltimore", "Frederick", "Rockville", "Gaithersburg"],
    Massachusetts: ["Boston", "Worcester", "Springfield", "Lowell"],
    Michigan: ["Detroit", "Grand Rapids", "Warren", "Sterling Heights"],
    Minnesota: ["Minneapolis", "Saint Paul", "Rochester", "Duluth"],
    Mississippi: ["Jackson", "Gulfport", "Southaven", "Hattiesburg"],
    Missouri: ["Kansas City", "Saint Louis", "Springfield", "Independence"],
    Montana: ["Billings", "Missoula", "Great Falls", "Bozeman"],
    Nebraska: ["Omaha", "Lincoln", "Bellevue", "Grand Island"],
    Nevada: ["Las Vegas", "Henderson", "Reno", "North Las Vegas"],
    "New Hampshire": ["Manchester", "Nashua", "Concord", "Derry"],
    "New Jersey": ["Newark", "Jersey City", "Paterson", "Elizabeth"],
    "New Mexico": ["Albuquerque", "Las Cruces", "Rio Rancho", "Santa Fe"],
    "New York": ["New York City", "Buffalo", "Rochester", "Yonkers"],
    "North Carolina": ["Charlotte", "Raleigh", "Greensboro", "Durham"],
    "North Dakota": ["Fargo", "Bismarck", "Grand Forks", "Minot"],
    Ohio: ["Columbus", "Cleveland", "Cincinnati", "Toledo"],
    Oklahoma: ["Oklahoma City", "Tulsa", "Norman", "Broken Arrow"],
    Oregon: ["Portland", "Salem", "Eugene", "Gresham"],
    Pennsylvania: ["Philadelphia", "Pittsburgh", "Allentown", "Erie"],
    "Rhode Island": ["Providence", "Warwick", "Cranston", "Pawtucket"],
    "South Carolina": [
        "Columbia",
        "Charleston",
        "North Charleston",
        "Mount Pleasant",
    ],
    "South Dakota": ["Sioux Falls", "Rapid City", "Aberdeen", "Brookings"],
    Tennessee: ["Nashville", "Memphis", "Knoxville", "Chattanooga"],
    Texas: ["Houston", "San Antonio", "Dallas", "Austin", "Arlington"],
    Utah: ["Salt Lake City", "West Valley City", "Provo", "West Jordan"],
    Vermont: ["Burlington", "Essex", "South Burlington", "Colchester"],
    Virginia: ["Virginia Beach", "Norfolk", "Chesapeake", "Richmond"],
    Washington: ["Seattle", "Spokane", "Tacoma", "Vancouver"],
    "West Virginia": ["Charleston", "Huntington", "Morgantown", "Parkersburg"],
    Wisconsin: ["Milwaukee", "Madison", "Green Bay", "Kenosha"],
    Wyoming: ["Cheyenne", "Casper", "Laramie", "Gillette"],
};

// Event listener for state selection
$("#inputState").change(function () {
    var stateSelected = $(this).val();
    var cities = statesAndCities[stateSelected];
    var htmlString = "";

    // Populate the dropdown list of cities based on the selected state
    if (cities) {
        for (var i = 0; i < cities.length; i++) {
            htmlString +=
                "<option value='" + cities[i] + "'>" + cities[i] + "</option>";
        }
        $("#inputCity").html(htmlString);
    } else {
        $("#inputCity").html("<option value=''>Select a city</option>");
    }
});
