var faster = {};

faster.initFoundation = function() {
    $(document).foundation();
};

//$(function(){
	// initialize mixitup
// 	$('#Grid').mixitup({
// 		resizeContainer: false,
// 		showOnLoad: 'nav'
// 	});
//

faster.initLeaflet = function() {
    var map = L.map('map').setView([7.1881, 21.0936], 1);
    L.MakiMarkers.accessToken = "pk.eyJ1IjoibWFya2pwcm90YXMiLCJhIjoiY2lzd2kxdDJ4MDU5dDMwcXBhNDQ0aDV2YiJ9.KqLj72yCowy_cW2v4h9gYQ";
    map.scrollWheelZoom.disable();
    var OpenMapSurfer_Grayscale = L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roadsg/x={x}&y={y}&z={z}', {
      maxZoom: 19
    });
    OpenMapSurfer_Grayscale.addTo(map);

     var dealers = [{name:'5th Blocker Skates',address:'143 West Regent Street<br /> Glasgow, G2 2SG<br /><a target="_blank" href="http://www.5thblockerskates.co.uk/">http://www.5thblockerskates.co.uk/</a>',lat:55.863445, lng: -4.260689},
        {name:'808 Rollerskate',address:'15 Stone Gate Road<br /> Central Valley, NY, 10917<br /><a target="_blank" href="http://www.808rollerskate.com/">http://www.808rollerskate.com/</a>',lat:41.33205, lng: -74.11218},
        {name:'All About Derby',address:'4395 Dixie Highway<br /> Waterford, MI, 48329<br /><a target="_blank" href="http://allaboutderby.com/">http://allaboutderby.com/</a>',lat:42.682724, lng: -83.375549},
        {name:'Amazing Skates',address:'Unit A, Perseverance Mills, Giles Street<br /> Bradford, BD6 3HS, United Kingdom<br /><a target="_blank" href="http://www.amazingskates.co.uk/">http://www.amazingskates.co.uk/</a>',lat:53.7692411,lng:-1.7862235},
        {name:'Anderson Roll-Arena',address:'2711 Broadway<br /> Anderson, IN, 46012<br /><a target="_blank" href="http://www.rollarena.com/">http://www.rollarena.com/</a>',lat:40.144954, lng: -85.676755},
        {name:'Bruised Boutique',address:'210 Daniel Webster Highway<br /> Nashua, NH, 03060<br /><a target="_blank" href="http://www.bruisedboutique.com">http://www.bruisedboutique.com</a>',lat:42.714326, lng: -71.442635},
        {name:'Bruised Boutique New Orleans',address:'Suite 13, 4241 Veterans Memorial Blvd<br /> Metairie, LA, 70006<br /><a target="_blank" href="http://www.bruisedboutique.com">http://www.bruisedboutique.com</a>',lat:30.005, lng: -90.179199},
        {name:'Chattanooga Rollersports',address:'6551 Hickory Brook Road<br /> Chattanooga, TN 37421<br /><a target="_blank" href="http://www.chattanoogarollersports.com">http://www.chattanoogarollersports.com</a>',lat:35.05134, lng: -85.16806},
        {name:'East Coast Rollersports',address:'203 East May Street<br /> Winder, GA 30680<br /><a target="_blank" href="http://www.eastcoastrollersports.com">http://www.eastcoastrollersports.com</a>',lat:33.9833, lng: -83.71294},
        {name:'Heartbreak Boutique',address:'120 Germain St<br /> Saint John, NB, E2l 1E4<br /><a target="_blank" href="http://www.heartbreakboutique.com">http://www.heartbreakboutique.com</a>',lat:45.272058, lng: -66.060239},
        {name:'Lloyds Recreation',address:'7520 MacLeod Trail SE<br /> Calgary, Alberta, Canada T2H 0L9<br /><a target="_blank" href="http://www.lloydsrollerrink.com">http://www.lloydsrollerrink.com</a>',lat:50.985812, lng: -114.071258},
        {name:'Medusa Skate Shop',address:'3515 Hydridge Drive<br /> Austin, TX 78759<br /><a target="_blank" href="http://www.medusaskates.com">http://www.medusaskates.com</a>',lat:30.4016, lng: -97.7536},
        {name:'Quad Roller Skate Shop',address:'Wrangelstr. 54<br /> 10997 Berlin Germany<br /><a target="_blank" href="http://www.quadrollerskateshop.com">http://www.quadrollerskateshop.com</a>',lat:52.4983612,lng:13.4425312},
        {name:'Roller Girl Skates',address:'1342 S State Hwy 121<br /> Lewisville, TX 75067<br /><a target="_blank" href="http://www.rollergirlskates.com">http://www.rollergirlskates.com</a>',lat:33.026896, lng: -96.992824},
        {name:'Sydney Derby Skates',address:'<a target="_blank" href="http://www.sydneyderbyskates.com/">http://www.sydneyderbyskates.com/</a>',lat:-33.733837,lng:150.380064},
        {name:'Turn Left Skate Pro',address:'101 N 10th St, Suite B2<br /> Fort Smith, Arkansas 72901<br /><a target="_blank" href="www.facebook.com/turnleftskatepro">www.facebook.com/turnleftskatepro</a>',lat:35.385648, lng: -94.420792},
        {name:'Turn Two Skate Shop',address:'643 Forest Ave<br /> Portland, ME 04101<br /><a target="_blank" href="http://www.turntwoskateshop.com">http://www.turntwoskateshop.com</a>',lat:43.670498, lng: -70.283935},
        {name:'Turn Around Skates',address:'84 Albany St<br /> Buffalo, NY 14213<br /><a target="_blank" href="http://www.turnaroundskates.com">http://www.turnaroundskates.com</a>',lat:42.91296, lng: -78.89854},
        {name:'Wicked Skate Wear',address:'2330 W. Third St., Ste. 1<br /> Los Angeles, CA 90057<br /><a target="_blank" href="http://www.wickedskatewear.com">http://www.wickedskatewear.com</a>',lat:34.06429, lng: -118.275716},
         {name:'Winnwood Skate Center',address:'4426 NE Winn Road<br /> Kansas City, MO, 64117<br /><a target="_blank" href="http://www.winnwoodsk8.com">http://www.winnwoodsk8.com</a>',lat:39.17573, lng: -94.53165},
        {name:'Double Threat Skates',address:'119 Pancras Road<br /> Kings Cross, London, NW1 1UN, UK<br /><a target="_blank" href="http://www.doublethreatskates.co.uk/">http://www.doublethreatskates.co.uk/</a>',lat:51.5335405, lng: -0.1287497},
         {name:'Powerhouse Skates',address:'331 Elizabeth Street NE, Suite E<br /> Atlanta, GA 30307<br /><a target="_blank" href="http://www.powerhouseskates.com/">http://www.powerhouseskates.com/</a>',lat:33.7635264, lng: -84.3584795},
         {name:'Resurrection Bike and Skate',address:'411 Pecos Trail<br /> Irving, Texas 75063<br /><a target="_blank" href="http://resurrectionskates.com/">http://resurrectionskates.com/</a>',lat:32.9308934, lng: -96.9512824},
         {name:'2N1 Skate Shoppe',address:'11471 Business Blvd #770111<br /> Eagle Creek, AK, 99577 <br /><a target="_blank" href="http://www.2n1skateshoppe.com/">http://www.2n1skateshoppe.com/</a>',lat:61.32507, lng: -149.575973},
         {name:'Starlight Skatium',address:'612 N College Ave<br /> Fayetteville, AR 72701<br /><a target="_blank" href="http://starlightskatium.com/">http://starlightskatium.com/</a>',lat:36.0717409, lng: -94.1572532},
         {name:'Skate Britain',address:'46 The Carriages, Gobowen Road<br /> Oswestry, Shropshire, SY11 1BX<br /><a target="_blank" href="http://skatebritain.net/">http://skatebritain.net/</a>',lat:52.8649511, lng: -3.0455673},
         {name:'Electric Skate Co.',address:'676 King St<br /> W. Kitchner, ON, Canada, N2G 1E2 <br /><a target="_blank" href="http://www.electricskateco.com/">http://www.electricskateco.com/</a>',lat:43.454914, lng: -80.504594},
         {name:'Flat Track Derby Limited',address:'<a target="_blank" href="http://www.flattrackderby.co.nz/">http://www.flattrackderby.co.nz/</a>',lat:-37.7155221, lng: 176.1328568},
         {name:'Hit This! Derby Gear',address:'<a target="_blank" href="http://www.hitthisderbygear.com/">http://www.hitthisderbygear.com/</a>',lat:44.9329915, lng: -123.0282074},
         {name:'Pivot Center',address:'3412 Inventors Rd<br /> Norfolk, Virginia 23502<br /><a target="_blank" href="https://www.facebook.com/PivotCenter">https://www.facebook.com/PivotCenter</a>',lat:36.8558053610978, lng: -76.2441626806323},
         {name:'RollerSkatin.ca',address:'847 Berkshire Drive<br />Woodstock, Ontario, Canada  N4S 8R6<br />1-855-ROLL-SKATE<br /><a target="_blank" href="http://www.RollerSkatin.ca">http://www.RollerSkatin.ca</a>',lat:43.1361656, lng: -80.7413994}


     ];

    $.each(dealers, function( index, value ) {
        var icon = L.MakiMarkers.icon({icon: "circle", color: "#161616", size: "s"});
        L.marker([value['lat'], value['lng']], {icon: icon}).addTo(map).
            bindPopup(value['name'] + "<br /> " + value['address']);
    });

};

$(function(){
    $('#Container').mixItUp();

    $('#buy_button').click(function(e) {
        e.preventDefault();
        $('#paypal_form').submit();
    });

	$("#wheel").click(function() {
		$(this).attr('background-image', 'img/roll_over/Wheels_Rollover.jpg');
	});
    $(".sticky-element").sticky({ topSpacing: 0});


    $( ".nav" ).on( "click", function() {
        // remove the class from our peers
       $( ".nav" ).siblings().removeClass("active_category"); 
      $( this ).addClass( "active_category" );
    });
});
