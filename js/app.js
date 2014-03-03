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


    var map = L.map('map').setView([30.267599, -97.742981], 3);
    L.tileLayer('http://129.206.74.245:8008/tms_rg.ashx?x={x}&y={y}&z={z}', { }).addTo(map);

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
        {name:'Winnwood Skate Center',address:'4426 NE Winn Road<br /> Kansas City, MO, 64117<br /><a target="_blank" href="http://www.winnwoodsk8.com">http://www.winnwoodsk8.com</a>',lat:39.17573, lng: -94.53165}];

    $.each(dealers, function( index, value ) {
        L.marker([value['lat'], value['lng']]).addTo(map).bindPopup(value['name'] + "<br /> " + value['address']);
    });

    $( ".nav" ).on( "click", function() {
        // remove the class from our peers
       $( ".nav" ).siblings().removeClass("active_category"); 
      $( this ).addClass( "active_category" );
    });
});