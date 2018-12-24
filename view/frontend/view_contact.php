<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(20.985121, 105.794128),
    zoom:16,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSxLoeVH330_x1JYvbWXnNmGFAKFKOPeE&callback=myMap"></script>