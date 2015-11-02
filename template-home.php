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
            <div style = "height:6%;" id = "info-bar-title"></div>
			<div style = "text-align:center;" id = "info-bar-menu"></div>
            <div id = "info-bar-content">
                <div id="valEastContent" class="contentBox">
                    <p>Valencia East</p>
                    <p>701 N Econlockhatchee Trail</p>
                    <p style="margin-bottom:10px;">Orlando, FL 32825</p>
                    <h1>Phone:</h1>
                    <p>407-299-5000</p>
                </div>
                <div id="valWestContent" class="contentBox">
                    <p>Valencia West</p>
                    <p>1800 South Kirkman Road</p>                    
                    <p style="margin-bottom:10px;">Orlando, FL 32811</p>
                    <h1>Phone:</h1>
                    <p>407-299-5000</p>
                </div>
                <div id="daytonaContent" class="contentBox">
                    <p>UCF Daytona Beach</p>
                    <p>1200 W. International Speedway Blvd.</p>
                    <p style="margin-bottom:10px;">Daytona Beach, FL 32114</p>
                    <h1>Phone:</h1> 
                    <p>386.506.4021</p>
                    <h1>Email:</h1>
                    <p>ucfdaytona@ucf.edu</p>
                </div>
                <div id="sanContent" class="contentBox">
                    <p>UCF Sanford/Lake Mary</p>
                    <p>100 Weldon Boulevard</p>
                    <p>Partnership Center</p>
                    <p style="margin-bottom:10px;">Sanford, FL 32773</p>
                    <h1>Phone: </h1>
                    <p>407.708.2471</p>
                    <h1>Email: </h1>
                    <p>ucfseminole@ucf.edu</p>
                </div>
                <div id="altamonteContent" class="contentBox">
                    <p>UCF Altamonte Springs</p>
                    <p>850 S. State Road 434, Suite A426</p>
                    <p style="margin-bottom:10px;">Altamonte Springs, FL 32714-0860</p>
                    <h1>Phone: </h1>
                    <p>407.404.6089</p>
                    <h1>Email: </h1>
                    <p>ucfseminole@ucf.edu</p>
                </div>
                <div id="cocoaContent" class="contentBox">
                    <p>UCF Cocoa</p>
                    <p>1519 Clearlake Road</p>
                    <p>Building 3</p>
                    <p style="margin-bottom:10px;">Cocoa, FL 32922</p>
                    <h1>Phone: </h1>
                    <p>321.433.7821</p>
                    <h1>Email: </h1>
                    <p>ucfcocoa@ucf.edu</p>
                </div>
                <div id="palmContent" class="contentBox">
                    <p>UCF Palm Bay</p>
                    <p>250 Community College Parkway</p>
                    <p>Building 3</p>
                    <p style="margin-bottom:10px;">Palm Bay, FL 32909</p>
                    <h1>Phone: </h1>
                    <p>321.433.7838</p>
                    <h1>Email: </h1>
                    <p>ucfpalmbay@ucf.edu</p>           
                </div>
                <div id="southContent" class="contentBox">
                    <p>UCF South Lake</p>
                    <p>1250 North Hancock Road</p>
                    <p style="margin-bottom:10px;">Clermont, FL 34711</p>
                    <h1>Phone: </h1>
                    <p>352.536.2113</p>
                    <h1>Email: </h1>
                    <p>ucfsouthlake@ucf.edu</p>
                </div>
                <div id="ocalaContent" class="contentBox">
                    <p>UCF Ocala</p>
                    <p>3001 S.W. College Road</p>
                    <p style="margin-bottom:10px;">Ocala, FL 34474</p>
                    <h1>Phone: </h1>
                    <p>352.854.2322 x. 1824</p>
                    <h1>Email: </h1>
                    <p>ucfocala@ucf.edu</p>
                </div>
                <div id="leesburgContent" class="contentBox">
                    <p>UCF Leesburg</p>
                    <p>9501 U.S. Highway 441</p>
                    <p style="margin-bottom:10px;">Leesburg, FL 34788</p>
                    <h1>Phone: </h1>
                    <p>352.536.2113</p>
                    <h1>Email:</h1> 
                    <p>ucfleesburg@ucf.edu</p>
                </div>

                <!--ABOUT-->

                <div id="valEastAbout" class="aboutBox">
                    <p>Valencia East</p>
                    <p>About</p>
                </div>
                <div id="valWestAbout" class="aboutBox">
                    <p>Valencia West</p>
                    <p>About</p>
                </div>
                <div id="daytonaAbout" class="aboutBox">
                    <p>UCF Daytona Beach</p>
                    <p>About</p>
                </div>
                <div id="sanAbout" class="aboutBox">
                    <p>UCF Sanford/Lake Mary</p>
                    <p>About</p>
                </div>
                <div id="altamonteAbout" class="aboutBox">
                    <p>UCF Altamonte Springs</p>
                    <p>About</p>
                </div>
                <div id="cocoaAbout" class="aboutBox">
                    <p>UCF Cocoa</p>
                    <p>About</p>
                </div>
                <div id="palmAbout" class="aboutBox">
                    <p>UCF Palm Bay</p>
                    <p>About</p>           
                </div>
                <div id="southAbout" class="aboutBox">
                    <p>UCF South Lake</p>
                    <p>About</p>
                </div>
                <div id="ocalaAbout" class="aboutBox">
                    <p>UCF Ocala</p>
                    <p>About</p>
                </div>
                <div id="leesburgAbout" class="aboutBox">
                    <p>UCF Leesburg</p>
                    <p>About</p>
                </div>

                <!--BOARD-->

                <div id="valEastBoard" class="boardBox">
                    <p>Valencia East</p>
                    <p>Board</p>
                </div>
                <div id="valWestBoard" class="boardBox">
                    <p>Valencia West</p>
                    <p>Board</p>
                </div>
                <div id="daytonaBoard" class="boardBox">
                    <p>UCF Daytona Beach</p>
                    <p>Board</p>
                </div>
                <div id="sanBoard" class="boardBox">
                    <p>UCF Sanford/Lake Mary</p>
                    <p>Board</p>
                </div>
                <div id="altamonteBoard" class="boardBox">
                    <p>UCF Altamonte Springs</p>
                    <p>Board</p>
                </div>
                <div id="cocoaBoard" class="boardBox">
                    <p>UCF Cocoa</p>
                    <p>Board</p>
                </div>
                <div id="palmBoard" class="boardBox">
                    <p>UCF Palm Bay</p>
                    <p>Board</p>           
                </div>
                <div id="southBoard" class="boardBox">
                    <p>UCF South Lake</p>
                    <p>Board</p>
                </div>
                <div id="ocalaBoard" class="boardBox">
                    <p>UCF Ocala</p>
                    <p>Board</p>
                </div>
                <div id="leesburgBoard" class="boardBox">
                    <p>UCF Leesburg</p>
                    <p>Board</p>
                </div>
            </div>
            <div style = "word-break:break-all;max-width:290px;" id = "info-bar-link"></div>
		</div>
			
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

// When user clicks on link, google maps marker info window pops up
var map;
var locations = [
  ['Leesburg', 28.8292413, -81.79715220000003, 10, 'http://regionalcampuses.ucf.edu/campus/leesburg/', 'leesburg'],
  ['Ocala', 29.1664907, -82.17902529999998, 9, 'http://regionalcampuses.ucf.edu/campus/ocala/', 'ocala'],
  ['South Lake', 28.551185, -81.70848389999998, 8, 'http://regionalcampuses.ucf.edu/campus/south-lake-campus/', 'south'],
  ['Palm Bay', 27.993401, -80.63021509999999, 7, 'http://regionalcampuses.ucf.edu/campus/palm-bay/', 'palm'],
  ['Cocoa', 28.3838714, -80.75921770000002, 6, 'http://regionalcampuses.ucf.edu/campus/cocoa/', 'cocoa'],
  ['Altamonte', 28.6467101, -81.4156304, 5, 'http://regionalcampuses.ucf.edu/campus/altamonte-springs/', 'altamonte'],
  ['Sanford/Lake Mary', 28.7405957, -81.27390730000002, 4, 'http://regionalcampuses.ucf.edu/campus/sanford-lake-mary/', 'san'],
  ['Daytona', 29.2020257, -81.04857370000002, 3, 'http://regionalcampuses.ucf.edu/campus/daytona-beach/', 'daytona'],
  ['Valencia West', 28.522169, -81.46411599999999, 2, 'http://valenciacollege.edu/west/', 'valWest'],
  ['Valencia East', 28.553125, -81.250628, 1, 'http://valenciacollege.edu/east/', 'valEast']
];

$(document).ready(function() {
    initialize();
    $('#info-bar').hide();
    $('.contentBox').hide();
    $('.aboutBox').hide();
    $('.boardBox').hide();
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
    $('.contentBox').hide();
    $('.aboutBox').hide();
    $('.boardBox').hide();
    $('#info-bar').show();
    $('#info-bar-link').html("<h1>Site:</h1><a style='color:#ffca06' href='"+ locations[num][4] +"'>" + locations[num][4] + "</a>");
    $('#info-bar-link').show();
    $('#info-bar-title').html("<h1 style='text-align:center;margin-top:13px;'>" + locations[num][0] + "</h1>");
    $('#'+locations[num][5]+'Content').show();
    $('#info-bar-menu').html("<div id='contactButton' style='display:inline-block;margin-right:15px;'><p style='cursor:pointer;text-align:center;margin-bottom:20px;color:#ffca06;'>Contact</p></div><div style='display:inline-block;margin-right:15px;' id='aboutButton'><p style='cursor:pointer;text-align:center;margin-bottom:20px;color:#ffca06;'>About</p></div><div style='display:inline-block;' id='boardButton'><p style='cursor:pointer;text-align:center;margin-bottom:20px;color:#ffca06;'>Board</p></div>");
    $("#aboutButton").on("click", function() {
        $('.boardBox').hide();
        $('.contentBox').hide();
        $('#'+locations[num][5]+'About').show();
        $('#info-bar-link').hide();
    });
    $("#boardButton").on("click", function() {
        $('.contentBox').hide();
        $('.aboutBox').hide();
        $('#'+locations[num][5]+'Board').show();
        $('#info-bar-link').hide();
    });
    $("#contactButton").on("click", function() {
        $('.boardBox').hide();
        $('.aboutBox').hide();
        $('#'+locations[num][5]+'Content').show();
        $('#info-bar-link').show();
    });
}

</script>

<?php get_footer(); ?>