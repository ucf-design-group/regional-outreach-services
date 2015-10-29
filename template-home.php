<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div class="content-area">

		<div class="map-wrap">
			<h1> Regional Map </h1>
			<div class="map">
				<div id="map_canvas" style="width: 100%; height: 770px"></div>
			</div>
		</div>

		<div class="regional-sidebar">
			<div class="campus-wrap">
				<h1> Campuses </h1>
				<ul>
					<div id="valEast" style="cursor:pointer;"><li>Valencia East</li></div>
					<div id="valWest" style="cursor:pointer;"><li>Valencia West</li></div>
					<div id="daytona" style="cursor:pointer;"><li>Daytona</li></div>
					<div id="san" style="cursor:pointer;"><li>Sanford/Lake Mary</li></div>
					<div id="altamonte" style="cursor:pointer;"><li>Altamonte</li></div>
					<div id="cocoa" style="cursor:pointer;"><li>Cocoa</li></div>
					<div id="palm" style="cursor:pointer;"><li>Palm Bay</li></div>
					<div id="south" style="cursor:pointer;"><li>South Lake</li></div>
					<div id="ocala" style="cursor:pointer;"><li>Ocala</li></div>
					<div id="leesburg" style="cursor:pointer;"><li>Leesburg</li></div>	
				</ul>
			</div>
			<div class="contact-wrap">
				<h1> Contact </h1>
				<div class="info">
					<div class="address">
						<h3>Office of Student Involvement</h3>
						<p>4000 Central Florida Boulevard</p>
						<p>Orlando, FL 32816</p>
						<br>
					</div>
					<div class="phone-number">
						<p><strong>Phone:</strong> (407) 823-6471</p>
					</div>
					<div class="fax">
						<p><strong>Fax:</strong> (407) 823-5899</p>
					</div>
				</div>
			</div>
		</div>

		<div class = "info-bar" id = "info-bar">
            <div style = "height:15%;" id = "info-bar-title"></div>
			<div id = "info-bar-menu"></div>
            <div id = "info-bar-content"></div>
            <div style = "word-break:break-all;max-width:290px;" id = "info-bar-link"></div>
		</div>
			
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

// When user clicks on link, google maps marker info window pops up
var map;
var locations = [
  ['Leesburg', 28.8292413, -81.79715220000003, 10, 'http://regionalcampuses.ucf.edu/campus/leesburg/'],
  ['Ocala', 29.1664907, -82.17902529999998, 9, 'http://regionalcampuses.ucf.edu/campus/ocala/'],
  ['South Lake', 28.551185, -81.70848389999998, 8, 'http://regionalcampuses.ucf.edu/campus/south-lake-campus/'],
  ['Palm Bay', 27.993401, -80.63021509999999, 7, 'http://regionalcampuses.ucf.edu/campus/palm-bay/'],
  ['Cocoa', 28.3838714, -80.75921770000002, 6, 'http://regionalcampuses.ucf.edu/campus/cocoa/'],
  ['Altamonte', 28.6467101, -81.4156304, 5, 'http://regionalcampuses.ucf.edu/campus/altamonte-springs/'],
  ['Sanford/Lake Mary', 28.7405957, -81.27390730000002, 4, 'http://regionalcampuses.ucf.edu/campus/sanford-lake-mary/'],
  ['Daytona', 29.2020257, -81.04857370000002, 3, 'http://regionalcampuses.ucf.edu/campus/daytona-beach/'],
  ['Valencia West', 28.522169, -81.46411599999999, 2, 'http://valenciacollege.edu/west/'],
  ['Valencia East', 28.553125, -81.250628, 1, 'http://valenciacollege.edu/east/']
];

$(document).ready(function() {
    initialize();
    $('#info-bar').hide();
    $("#valEast").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.553125, -81.250628);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(9);
    });

    $("#valWest").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.522169, -81.46411599999999);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(8);
    });

    $("#daytona").on("click", function() {
        var laLatLng = new google.maps.LatLng(29.2020257, -81.04857370000002);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(7);
    });

    $("#san").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.7405957, -81.27390730000002);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(6);
    });

    $("#altamonte").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.6467101, -81.4156304);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(5);
    });

    $("#cocoa").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.3838714, -80.75921770000002);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(4);
    });

    $("#palm").on("click", function() {
        var laLatLng = new google.maps.LatLng(27.993401, -80.63021509999999);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(3);
    });

    $("#south").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.551185, -81.70848389999998);
        map.panTo(laLatLng);
        map.setZoom(15);
        sideBar(2);
    });

    $("#ocala").on("click", function() {
        var laLatLng = new google.maps.LatLng(29.1664907, -82.17902529999998);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(1);
    });

    $("#leesburg").on("click", function() {
        var laLatLng = new google.maps.LatLng(28.8292413, -81.79715220000003);
        map.panTo(laLatLng);
        map.setZoom(14);
        sideBar(0);
    });
 });

function initialize () {
	var myOptions = {
		zoom: 9,
		center: new google.maps.LatLng(28.522169, -81.38253900000001),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}

    map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);



    var infowindow = new google.maps.InfoWindow();
    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
          sideBar(i);
        }
      })(marker, i));
    }
}

function sideBar(num){
    $('#info-bar').show();
    $('#info-bar-title').html("<h1 style='text-align:center;margin-top:8px;'>" + locations[num][0] + "</h1>");
    $('#info-bar-content').html(/*INSTEAD OF PUTTING THIS IN THE ARRAY, MAKE DIVS FOR EACH ONE TO MAKE HTML EASIER AND DO SHOW/HIDE HERE.*/);
    $('#info-bar-link').html("<p>Site:</p><a href='"+ locations[num][4] +"'>" + locations[num][4] + "</a>");
}

</script>

<?php get_footer(); ?>