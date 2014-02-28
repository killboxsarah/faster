var faster = {};

faster.initFoundation = function() {
    $(document).foundation();
};

$(function(){
	// initialize mixitup
	$('#Grid').mixitup({
		resizeContainer: false,
		showOnLoad: 'nav'
	});
	$("#wheel").click(function() {
		$(this).attr('background-image', 'img/roll_over/Wheels_Rollover.jpg');
	});
    $(".sticky-element").sticky({ topSpacing: 0});

    var map = L.map('map', {
        layers: MQ.mapLayer(),
        center: [ 30.267599, -97.742981 ],
        zoom: 3
    });

     var dealers = [{name:'5th Blocker Skates',address:'Ground floor/ first left, 143 West Regent Street, Glasgow, G2 2SG',lat:55.863445, lng: -4.260689},
        {name:'808 Rollerskate',address:'15 Stone Gate Road, Central Valley, NY, 10917',lat:41.33205, lng: -74.11218},
        {name:'All About Derby',address:'4395 Dixie Highway, Waterford, MI, 48329',lat:42.682724, lng: -83.375549},
        {name:'Amazing Skates',address:'Unit A, Perseverance Mills, Giles Street, Bradford, BD6 3HS, United Kingdom',lat:53.7692411,lng:-1.7862235},
        {name:'Anderson Roll-Arena',address:'2711 Broadway, Anderson, IN, 46012',lat:40.144954, lng: -85.676755},
        {name:'Bruised Boutique',address:'210 Daniel Webster Highway, Nashua, NH, 03060',lat:42.714326, lng: -71.442635},
        {name:'Bruised Boutique New Orleans',address:'Suite 13, 4241 Veterans Memorial Blvd, Metairie, LA, 70006',lat:30.005, lng: -90.179199},
        {name:'Chattanooga Rollersports',address:'6551 Hickory Brook Road, Chattanooga, TN 37421',lat:35.05134, lng: -85.16806},
        {name:'East Coast Rollersports',address:'203 East May Street  Winder, GA 30680',lat:33.9833, lng: -83.71294},
        {name:'Heartbreak Boutique',address:'120 Germain St, Saint John, NB, E2l 1E4',lat:45.272058, lng: -66.060239},
        {name:'Lloyds Recreation',address:'7520 MacLeod Trail SE, Calgary, Alberta, Canada T2H 0L9',lat:50.985812, lng: -114.071258},
        {name:'Medusa Skate Shop',address:'3515 Hydridge Drive, Austin, TX 78759',lat:30.4016, lng: -97.7536},
        {name:'Quad Roller Skate Shop',address:'Wrangelstr. 54, 10997 Berlin Germany',lat:52.4983612,lng:13.4425312},
        {name:'Roller Girl Skates',address:'1342 S State Hwy 121, Lewisville, TX 75067',lat:33.026896, lng: -96.992824},
        {name:'Sydney Derby Skates',address:'http://www.sydneyderbyskates.com/',lat:-33.733837,lng:150.380064},
        {name:'Turn Left Skate Pro',address:'101 N 10th St, Suite B2, Fort Smith, Arkansas 72901',lat:35.385648, lng: -94.420792},
        {name:'Turn Two Skate Shop',address:'643 Forest Ave, Portland, ME 04101',lat:43.670498, lng: -70.283935},
        {name:'Turn Around Skates',address:'84 Albany St, Buffalo, NY 14213',lat:42.91296, lng: -78.89854},
        {name:'Wicked Skate Wear',address:'18377 Gothard Street, Huntington Beach, CA 92648',lat:33.695856, lng: -117.999781},
        {name:'Winnwood Skate Center',address:'4426 NE Winn Road, Kansas City, MO, 64117',lat:39.17573, lng: -94.53165}];

    $.each(dealers, function( index, value ) {
        L.marker([value['lat'], value['lng']]).addTo(map).bindPopup(value['name'] + "<br /> " + value['address']);
    });

    $( ".nav" ).on( "click", function() {
        // remove the class from our peers
       $( ".nav" ).siblings().removeClass("active_category"); 
      $( this ).addClass( "active_category" );
    });
});