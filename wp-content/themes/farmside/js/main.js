 jQuery(document).ready(function() {

 

  jQuery("#owl-demo").owlCarousel({

 
      loop:true,
      autoPlay: 5000, //Set AutoPlay to 3 seconds
      items : 6,
      itemsDesktop : [1024,6],
      itemsDesktopSmall : [992,5],
      itemsTablet : [768,4]
 

  });

 
jQuery('.set-cal').click(function(){
fetch();
});
});

 function fetch(){
 	jQuery.post('http://i--demo.com/projects/farmside//wp-admin/admin-ajax.php', {'action':'data_fetch'}, function(response){
 			jQuery('#result').append(response);

 	});
 }