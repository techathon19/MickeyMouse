 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>MapmyIndia Maps API: Auto Suggest Example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
            <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon">

              <link rel="stylesheet" href="css/jquery-ui.min.css" />
                <script type="text/javascript" src="jquery.min.js"></script>
                <script type="text/javascript" src="jquery-ui.min.js"></script>

                <!--put your map api javascript url with key here-->
                <script src="https://apis.mapmyindia.com/advancedmaps/v1/hlins1ecf4hh9z3fwo1c6pirhds1ih1y/map_load?v=1.3"></script>
                <style>
                    body,html { height: 100%;font-family:Verdana,sans-serif, Arial;color:#555;margin: 0;/*EOL*/font-size:12px; padding: 0; background:#fafafa}

                    .loading{
                        background-image: url(loading.gif);
                        background-position: right center;
                        background-repeat: no-repeat;
                    }
                    .ui-autocomplete .highlight {
                        text-decoration: underline;
                    }
                    .ui-autocomplete{
                    }
                    /*marker css*/
                    .map_marker{
                        position:relative;width:34px;height:48px
                    }
                    /*marker text span css*/
                    .my-div-span{
                        position: absolute;left:1.5em;right: 1em;top:1.4em;bottom:2.5em;font-size:9px;font-weight:bold;width:1px;color:black;
                    }
                    .tab-details{
                        width:300px;padding:3px;font-size: 11px;text-align:left
                    }
                    .tab-details th{
                        white-space:nowrap
                    }
                    .details-header{
                        padding: 0 12px;color:green;font-size:13px;
                    }
                    .details-list{
                        list-style-type:decimal;color:green; padding:2px 2px 0 30px;
                    }
                    #result{
                        border-top: 1px solid #e9e9e9;padding:10px; margin-top: 12px;
                    }
                    #suggestdetail{
                        border-bottom: 1px solid #e9e9e9;display: none
                    }

                    .searchbox-title{
                        padding: 5px 0;font-size:13px;color:#222
                    }
                    .searchbox-container{
                        padding: 0 12px 0 17px;line-height:20px
                    }
                    .txt-search{
                        width: 254px;margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555;   
                    }

                    /*map css **/
                    #map-container {
                        position: absolute;left: 312px; top: 150px;right: 2px; bottom: 2px;border: 1px solid #cccccc; 
                    }
                    #menu{
                        position: absolute;left: 2px; top: 150px;width: 306px;bottom: 2px;border: 1px solid #cccccc;background-color: #FAFAFA;overflow-x:hidden;overflow-y: auto;
                    }
                    li{
                        padding:0 5px 10px 0;cursor:pointer;color: #333;
                    }
                    li:hover{
                        color:#00adff;cursor:pointer;text-decoration:underline
                    }
                    
                    #ui-id-1{
                        width: 20em !important; 
                        border: none;
                        word-wrap: break-word !important;
                        background: #FFF 50% bottom repeat-x;
                        color: #fff;
                        height: 40%;
                        overflow: scroll;
                    }
                    ::-webkit-scrollbar {
                        width: 5px;
                        height: 12px;
                    }
                    ::-webkit-scrollbar-thumb {
                        background: #4DB6AC;
                        border-radius: 10px;
                    }
                </style>

                </head>
                <body onload="loadMap();">
                   
                <div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="#"><img class="float-left" src="img.jpg" width="100px" height="100px"></a>
  <ul class="navbar-nav ">
   
    <li class="nav-item center left">
      <a class="nav-link " href="#" >Home</a>
    </li>
    <li class="nav-item center">
      <a class="nav-link" href="#about">About</a>
    </li>
     <li class="nav-item center">
      <a class="nav-link" href="#login">Login</a>
    </li>
     <li class="nav-item center">
      <a class="nav-link" href="#">SignUp</a>
    </li>
     <li class="nav-item center">
      <a class="nav-link" href="#">ContactUs</a>
    </li>
   
  </ul>
</nav>
</div>




                    <div id="menu">
                        <div class="searchbox-container">
                            <div class="searchbox-title"><b>Enter Location:</b></div>
                            <input class="border border-dark form-control" id="autocomplete" type="text" placeholder="search" name="search" 
                                   onkeypress="if (event.which == 13 || event.keyCode == 13)
                                               result()">
							   
							<div class="searchbox-title"><b>Location (Lat,Lon):</b></div>
                            <input class="border border-dark form-control" id="latLon" type="text" placeholder="lat,lon" name="search" style="margin-bottom:10px;"> <button class="btn btn-outline-dark" onclick="showLocation();">Show location</button> <button class="btn btn-outline-dark" onclick="hideLocation();">Hide location</button>
							
							
							<div class="searchbox-title"><b>Select Region:</b></div>
                     
							<select id="region" class="border border-dark form-control">
								<option value="ind">India</option>
								<option value="bgd">Bangladesh</option>
								<option value="btn">Bhutan</option>
								<option value="npl">Nepal</option>
								<option value="lka">Sri Lanka</option>
								
							</select>

							<div class="searchbox-title"><b>Select Pod:</b><br>Restrict the type of results</font></div>
                     
							<select id="pod" class="border border-dark form-control">
							    <option value="">Select</option>
								<option value="SSLC">Subsublocality</option>
								<option value="SLC">Sublocality</option>
								<option value="LC">Locality</option>
								<option value="CITY">City</option>
								<option value="VLG">Village</option>
								<option value="SDIST">Subdistrict</option>
								<option value="DIST">District</option>
								<option value="STATE">State</option>
							</select>	
							
							<div class="searchbox-title"><b>Select Filter:</b></div>
                     
							<select id="filter" class="border border-dark form-control" onchange="showFilter();">
								<option value="">Select</option>
								<option value="bounds">Bounds</option>
								<option value="cop">Eloc</option>
							</select>
							<input class="border border-dark form-control" id="filterVal" type="text" placeholder="" name="search" style="display:none;">
                        </div>
						 
                        <div id="result"></div>
                        <div id="suggestdetail" ></div>
                    </div>
                    <div id="map-container"></div>
                    <script>
                        var result_string = '';
                        var latitudeArr = [];
                        var longitudeArr = [];
                        var url_result;
                        var all_result = [];
                        var show_marker = new Array();
                        var isselected = 0;
                        var map;
                        ///var centre = new L.LatLng(22.268764, 82.390136);

                        /**map initialization with tiles of MapmyIndia with MapmyIndia.Map**/
                        //var map = new MapmyIndia.Map('map-container', {center: centre, zoomControl: true, hybrid: true});//{minZoom: 4,maxZoom: 16 }
                        /***function that modifies both center map position and zoom level.***/
                       // map.setView(centre, 4);
					   var poly;
					  
					   function loadMap()
						{
							var centre = new L.LatLng(22.268764, 82.390136);
							map = new MapmyIndia.Map('map-container', {center: centre, editable: true,zoomControl: true,search:false, hybrid: true});
							 /***function that modifies both center map position and zoom level.***/
							map.setView(centre, 6);
							var i=0;
							 var secureThisArea=Array();
							map.on('click', function(e) {
								var m=[];
								var val=document.getElementById('filter').value;
								if(val=='bounds')
								{
									m[0]=parseFloat(e.latlng.lat).toFixed(6);
									m[1]=parseFloat(e.latlng.lng).toFixed(6);;
									secureThisArea[i]= m;//e.latlng.lat + ", " + e.latlng.lng;
									createpoly(secureThisArea);
									i++;
								}
								
								});
						
						}
						 var addr = (function () {
                                                        var counter = 0;
                                                        return function () {counter += 1; return counter}
                                                })();
                                                 var cnt=addr();
                                                if(cnt==1)
                                                {
                                                        showLocation();
                                                }

					   function createpoly(secureThisArea){
							var val=document.getElementById('filter').value;
							if(val=='bounds')
							{
								var latlngs = secureThisArea;//[[28.7041, 77.1025], [28.6692, 77.4538]];
								polygon = L.polygon(latlngs, {color: 'blue'});
								map.addLayer(polygon);
								var bounds = polygon.getBounds();
								document.getElementById('filterVal').value=bounds.getNorthWest().lat+","+bounds.getNorthWest().lng+";"+bounds.getSouthEast().lat+","+bounds.getSouthEast().lng;
							}
							else{
								document.getElementById('filterVal').value='';
								document.getElementById('filterVal').placeholder="Enter Eloc";
								//if(document.getElementById('filterVal').value!='')
								//{
									map.remove();
									loadMap();
								//}
								
							}
						}
						
                       function showLocation()
						{
							MapmyIndia.geo(map_o[0]);
                            var current_lat="";
                            var current_lng="";
                               if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(showPosition);
                                } else { 
                                    x.innerHTML = "Geolocation is not supported by this browser.";
                                }
                            function showPosition(position) {
			
                                current_lat=position.coords.latitude;
                                current_lng=position.coords.longitude;
                               if(current_lat!='' && current_lng!='')
								{
									document.getElementById("latLon").disabled = true;
									document.getElementById('latLon').value=current_lat+","+current_lng;
								}
								else
								{
									document.getElementById("latLon").disabled = false;
									document.getElementById('latLon').value='';
								}
                            }
                          }
						 function showFilter()
						 {
							 var filter=document.getElementById('filter').value;
							 if(filter!='')
							 {
								 
								 document.getElementById('filterVal').style.display='block';
                                                                 if(filter=='bounds')
								{
								   filterparam="Create bound by clicking on Map";
								}
								else
								{
								   filterparam="Enter Eloc";
								}
								 document.getElementById('filterVal').placeholder=filterparam;
								 if(filter=='cop')
								 {
									//alert("cops");
									secureThisArea=[];
									createpoly(secureThisArea);
								
								 }
							 }
							 else{
								 document.getElementById('filterVal').style.display='none';
							 }
						 }
                        function hideLocation()
						{
							document.getElementById("latLon").disabled = false;
							document.getElementById('latLon').value='';
						}
						
                        $('.srch_dv').hide();

                        /***autosuggest function.***/
                        $(function () {
                            $("#autocomplete").keypress(function(){
                                $('#autocomplete').addClass('loading');
                            })
                            $("#autocomplete").autocomplete({
                                delay: 500,
                                minLength: 0,
                                source: function (request, response) {
                                    if ($("#autocomplete").val().length > 0) {
										
								var location=document.getElementById('latLon').value;
								var region=document.getElementById('region').value;
								var pod=document.getElementById('pod').value;
								var filter=document.getElementById('filter').value;
								if(filter!='')
								{
									var filterVal=document.getElementById('filterVal').value;
									var filter=filter+":"+filterVal;
								}
								
										
                                        $.ajax({
                                            type: "GET",
                                            dataType: 'text',
                                            url: "respatosgst.php",
                                            async: false,
                                            data: {
                                                query: JSON.stringify($(autocomplete).val().replace(/\s/g, "+")),
												location :JSON.stringify(location),
												region :JSON.stringify(region),
												pod :JSON.stringify(pod),
												filter :JSON.stringify(filter)
                                            },
                                            success: function (result) {
                                                hideLoader();
												remove_markers();
                                                var resdata = JSON.parse(result);
                                                console.log(resdata);
                                                if (resdata.status == 'success') {
                                                    var jsondata = JSON.parse(resdata.data);

                                                    result_string = '<div class="details-header">Auto Suggested Pois</div><div style="font-size: 13px"><ul class = "details-list">';
                                                    /*success*/
                                                    if (typeof jsondata.suggestedLocations!="undefined") {
                                                        var m = (jsondata.suggestedLocations);
                                                        var c = 0;
                                                        var array = $.map(jsondata.suggestedLocations, function (item) {
                                                            var param = '';
                                                            var address = item["placeAddress"];
                                                            if (c >= 0) {
                                                                param = (c + "|" + item["longitude"] + "|" + item["latitude"] + "|" + item["type"] + "|" + item["placeAddress"] + "|" + item["eLoc"]);
                                                            }
                                                            c = c + 1;
                                                            result_string += '<li>ddd</li>';
                                                            return{
                                                                label: item["placeAddress"],
                                                                placeName: item["placeName"],
                                                                url: param
                                                            }
                                                        });
                                                        response(array);
                                                        showDiv("suggestdetail");
                                                        clearDiv("suggestdetail");
                                                        clearDiv("result");
                                                    }
                                                    /*handle the error codes and put the responses in divs*/
                                                    else {
                                                        hideLoader();
                                                        var error_response = "No result found."
                                                        hideDiv("suggestdetail");
                                                        document.getElementById('ui-id-1').style.display = "none";
                                                        document.getElementById('result').innerHTML = error_response;/***put response result in div**/
                                                        return{
                                                            label: '0'
                                                        }
                                                    }
                                                } else {
                                                    var error_message = resdata.data;
                                                    /***put response result in div****/
                                                    document.getElementById('result').innerHTML = error_message;
                                                    hideDiv("suggestdetail");
                                                    $('#ui-id-1').hide();
                                                }
                                            }
                                        });
                                    } else {
                                        /**clear autosuggest**/
                                        $('#autocomplete').autocomplete('close').val('');

                                        /**hide loader**/
                                        hideLoader();
                                        $("#autocomplete").val("");
                                        clearDiv("suggestdetail");
                                        hideDiv("suggestdetail");

                                        document.getElementById('result').innerHTML = "Please type any location in the search box.";
                                        remove_markers();
                                    }
                                },
                                focus: function (event, ui) {
                                    //prevent autocomplete from updating the textbox
                                    event.preventDefault();
                                },
                                select: function (event, ui) {
                                    isselected = 1;
                                    event.preventDefault();
                                    details = [];
                                    var val = ui.item.url;
                                    var res = val.split("|");
                                    if (res.length >= 0) {
                                        var content = new Array();
                                        if (res[3] != '')
                                            content.push('<tr><th>Type</th><td width="10px">:</td><td>' + res[3] + '</td></tr>');
                                        if (res[4] != '')
                                            content.push('<tr><th>Formatted Address</th><td width="10px">:</td><td>' + res[4] + '</td></tr>');
                                        if (res[5] != '')
                                            content.push('<tr><th>Place Id</th><td width="10px">:</td><td>' + res[5] + '</td></tr>');
                                        details.push(content.join(""));

                                        /***put autosuggest result in div***/
                                        document.getElementById('result').innerHTML = '<table class="tab-details">' + details[0] + '</table>';

                                        /***display markers***/
                                        show_markers(1, new L.LatLng(res[2], res[1]), 0);

                                    } else {
                                        hideLoader();
                                        remove_markers();
                                    }
                                }
                            }).data("ui-autocomplete")._renderItem = function (ul, item) {
                                var $a = $("<a></a>").append("<span style='font-weight: 650 !important;'>"+item.placeName+"</span><br>"+item.label);
                                return $("<li style='border-bottom:1px solid #f1efef !important;'></li>").append($a).appendTo(ul);
                            };
                            $(document).on("click","ul li",function(){
								var id=$(this).attr('id');
								var autos=$("#"+id+" span").eq(0).text();
								var label=$("#"+id+" span").eq(1).text();
								document.getElementById("autocomplete").value =autos;
								});
                        });
                        function show_markers(num, pos, detail_num) {
                            hideLoader();
                            var html="<img class='map_marker' src=" + "'https://maps.mapmyindia.com/images/2.png'>" + '<span class="my-div-span" style="left: 1.6em !important;">' + num + '</span>';
                            /*creating a div icon*/
                            var icon_marker = L.divIcon({className: 'my-div-icon',
                                html:html,
                                iconSize:[10, 10],
                                popupAnchor: [12, -10]
                            });
                            var m = L.marker(pos, {icon: icon_marker}).bindPopup('<table class="tab-details">' + details[detail_num] + '</table>').openPopup();
                            m.addTo(map);
                            map.setView(pos, 17);
                            show_marker.push(m);
                        }
                        function remove_markers() {
                            if (show_marker.length > 0) {
                                map.removeLayer(show_marker[0]);
                            }

                        }
                        function result() {
                            if (isselected == 0) {
                                var menu = $("#autocomplete").autocomplete("widget");
                                $(menu[0].children[0]).click();
                                console.log($(menu[0].children[0]).text());
                                document.getElementById('autocomplete').value = $(menu[0].children[0]).text();
                                document.getElementById('suggestdetail').innerHTML = result_string + '</ul></div>';
                            }
                        }
                        function hideLoader() {
                            /**hide loader**/
                            $("#autocomplete").removeClass("loading");
                        }
                        function showLoader() {
                            $("#autocomplete").addClass("ui-autocomplete-loading");
                        }
                        function clearDiv(id) {
                            document.getElementById(id).innerHTML = "";
                        }
                        function showDiv(id) {
                           document.getElementById(id).style.display = "block";
                        }
                        function hideDiv(id) {
                            document.getElementById(id).style.display = "none";
                        }
                        $(function () {
                            $(document).on('click', 'input[type=text]', function () {
                                this.select();
                            });
                        });
                    </script>
                </body>
                <!--html portion---->
                </html>



