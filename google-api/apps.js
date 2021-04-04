var map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -7.3058263, lng: 108.2129107 },
    zoom: 6,
  });
  var myLatLng = { lat: -7.3058263, lng: 108.2129107 };
  var sanggar = new google.maps.Marker({
    position: myLatLng,
    map: map,
    animation: google.maps.Animation.DROP,
    title: "Brahmastra Art",
  });
  var infowindow_sanggar = new google.maps.InfoWindow({
    content: "<h1>Brahmastra Art</h1><pJl. Mega Asri IX, Parakannyasag, Kec. Indihiang, Tasikmalaya, Jawa Barat 46151</p>",
  });
  sanggar.addListener("click", function () {
    infowindow_sanggar.open(map, sanggar);
  });
}
