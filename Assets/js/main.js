/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function(){
     $('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
    $('.modal-trigger').leanModal();
    $('.materialboxed').materialbox();
     $('.slider').slider({height:200});
});

$(window).load(function() {
    $('#status').fadeOut();
    $('#preloader').delay(300).fadeOut('slow');
});
  
  function initMap() {

  // Specify features and elements to define styles.
  var styleArray = [
    {
      featureType: "all",
      stylers: [
       { saturation: -80 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { hue: "#00ffee" },
        { saturation: 50 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];
  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 43.299298, lng: 5.3685412},
    scrollwheel: false,
    // Apply the map style array to the map.
    styles: styleArray,
    zoom: 16
  });
}
  
