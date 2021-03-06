var geocoder;

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert("Geocoder failed");
}

function initialize() {
    geocoder = new google.maps.Geocoder();
  }

function codeLatLng(lat, lng) {
    geocoder = new google.maps.Geocoder();
var latlng = new google.maps.LatLng(lat, lng);
geocoder.geocode({'latLng': latlng}, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
  console.log(results)
    if (results[1]) {
     //formatted address
     locality=  results[0].address_components[2]
     //alert(""+locality.short_name)//.formatted_address
    //find country name
        street=results[0].address_components[1]
        town=results[0].address_components[3]
        postcode=results[0].address_components[6]
        console.log(""+ street.short_name)
        console.log(""+ town.short_name)
        console.log(""+ postcode.short_name)
        for (var i=0; i<results[0].address_components.length; i++) {
        for (var b=0;b<results[0].address_components[i].types.length;b++) {

        //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
            if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                //this is the object you are looking for
                city= results[0].address_components[i];
                break;
            }
        }
    }
    //city data
    //alert(" " + city.short_name)//city.short_name +
    $('#locality').val(locality.short_name);
    } else {
      alert("No results found");
    }
  } else {
    alert("Geocoder failed due to: " + status);
  }
});
}