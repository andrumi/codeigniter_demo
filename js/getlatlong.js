var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition2(position) {

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    var lat=position.coords.latitude;
    var lng=position.coords.longitude

}
function getData(){
    var arr=[];
    $.ajax({
        //url: "<?=base_url(\"js/getUsersLatLong.php\")?>",
        url: "http://mi-linux.wlv.ac.uk/~1228264/codeigniter/js/getUsersLatLong.php",
        data:arr,
        dataType: "json",
        success:function(response){
            console.log(response)
            //arr= response
            console.log(response[0][0])
            //console.log(arr)
            //console.log(arr[1][0])
        },
        error: function(error){
            console.log(error)//'something went very wrong.'
        }
    }).done(function(response){
        arr=response
    });
    return arr;
}
function showPosition(position) {

    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    latlon2 = new google.maps.LatLng(lat+0.001, lon+0.001)
    mapholder = document.getElementById('mapholder')
    mapholder.style.height = '20.25em';
    mapholder.style.width = '31.25em';

    var arr= [];
    $.ajax({
        async:false,
        url: "http://mi-linux.wlv.ac.uk/~1228264/codeigniter/js/getUsersLatLong.php",
        data:arr,
        dataType: "json",
        success:function(response){
            console.log(response)
            //arr= response
            console.log(response[0][0])
            //console.log(arr)
            //console.log(arr[1][0])
        },
        error: function(error){
            console.log(error)//'something went very wrong.'
        }
    }).done(function(response){
        arr=response
    });
    //$.get('http://mi-linux.wlv.ac.uk/~1228264/codeigniter/js/getUsersLatLong.php').done(function(data){
    //     console.log(data);
    //    arr = data;
    //    console.log(arr);
    //});

    var myOptions = {
        center:latlon,zoom:14,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        mapTypeControl:false,
        navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    console.log('Array length = '+ arr.length);
    var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:"You are here!"});

    for(var i=0; i<arr.length;i++)
    {
        console.log(arr[i][0]);
        var lat = Number(arr[i][1]);
        console.log(lat);
        var lng = Number(arr[i][2]);
        console.log(lng);
        var place = new google.maps.LatLng(lat,lng);
        var marker3=new google.maps.Marker({position:place, map:map, title: arr[i][0]+ " is here!" });
    }
    var marker2 = new google.maps.Marker({position:latlon2,map:map,title:"Dave is here!"});

}
