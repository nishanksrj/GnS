$(document).ready(function (){  
 
		 
  /*  $('.menu a').click(function(event){
	   if(($(this)).hasClass('fade')){
	   var link = $(this);
	  event.preventDefault();
	   $("body").animate({ opacity: 0, backgroundColor: '#000',duration:100 }, function() {
	   window.location.href = $(link).attr('href');
    
	   });
    }
 });*/
 
            $('div.details').load('races.php');
			 $('.details').load('races.php');
           $('.left-menu a').each(function(){
               $(this).click(function(event){
                   //  alert('clicked');
                    event.preventDefault();
                    var $url = $(this).attr('href');
                    $('.details').load($url,function(){
				        var biggestHeight = 0;
					    if($('.details').height() > biggestHeight ) {
					   biggestHeight = $(this).height();
				    }
				    
				    $(".container,.row").css("paddingBottom",biggestHeight/5+"px");
				});
				});
                          });
			  
			  
		$('.left-menuL a').each(function(){
               $(this).click(function(event){
				if($(this).hasClass('active')){
				   
				   event.preventDefault();
				   event.stopPropagation();
				   
				var $url = $(this).attr('href');
				var id = $(this).data('id');
                    $('.detailsL').load($url,{pid:id});
				}
			 });
		  });
		
		function challenge(link){
				   var $url = $(link).attr('href');
				var id = $(link).data('id');
			 $('.detailsL').load($url,{pid:id},function(){
					   
					$('select.event').on("change",function(){
					    $('tr.teams').html('');
				    var $eid  = $(this).val();
				   // alert($event);
				   // alert($eid);
				    $.get('types.php',{eid:$eid},function(data){
					   if(data==''){
						  $('tr.challenge-link').html('');
						  $('tr.append').html('');
						  var $event = $('select.event').find(':selected').data('event');
						  var $type = '';
						  $.get('teams.php',{event:$event,type:$type},function(data){
							 $('tr.teams').html(data);
							 $('select.team').searchable();
						  });
					   }else{
					   $('tr.append').html(data);
				    }
				//	alert('loaded');  
//					   $('select.event').prop('disabled','disabled');
					 
					});  //
					
					});
					$("tr.append").on("change",function(){
						  $('tr.challenge-link').html('');
						  $('tr.teams').html('');
						  var $type= $('select.types').val();
						  var $event = $('select.event').find(':selected').data('event');
						  $.get('teams.php',{event:$event,type:$type},function(data){
							 $('tr.teams').html(data);
							 $('select.team').searchable();
						  });
					   });
					$("tr.teams").on("change",function(){
					    $('tr.challenge-link').html('<td colspan="2"><input type = "submit" value = "Challenge"></td>');
						  
					});
				});
	
				
		  };
		  
				    
				    
				    
		  $('a.challenge').click(function(event){
			 event.preventDefault();
				   event.stopPropagation();
			 challenge(this);
		  });
		  
    
		$('.left-menuR a').each(function(){
               $(this).click(function(event){
				if($(this).hasClass('active')){
				event.preventDefault();
				//alert('clicked');
				var $url = $(this).attr('href');
				var i = $(this).data('eid');
				var t = $(this).data('type');
				var c = $(this).data('cat');
				//ert('a');
                    $('.detailsR').load($url,{eid:i,type:t,cat:c},function(){
				    $('.team-members').hide(0);
				    $('.team-members').css('position','absolute');
				    $('td.show').each(function(){
				    $('td.show').hover(
						  function(){
							 $(this).find('div.team-members').show(0);
						  },
				    function(){
					   $(this).find('div.team-members').hide(0);
				    }
						  );
				});
				  //alert('complete');
			 });
				}
				if($(this).hasClass('all')){
				    event.preventDefault();
				    var $url = $(this).attr('href');
				   $('.detailsR').load($url,function(){
				        var biggestHeight = 0;
					    if($('.details').height() > biggestHeight ) {
					   biggestHeight = $(this).height();
				    }
				    $(".container,.row").css("padding-bottom",biggestHeight+"px");});
				}
				
			 });
		  }); 	 
				

    $('.detailsL').load("process.php",{pid:1});
    $('.detailsR').load("overall.php",function(){
				        var biggestHeight = 0;
					    if($('.details').height() > biggestHeight ) {
					   biggestHeight = $(this).height();
				    }
				    $(".container,.row").css("paddingBottom",biggestHeight/2+"px");
						  
    });
   
   
$(window).scroll(function(){
		$("div[data-type='parallax']").each(function(){
			var yShift = -($(window).scrollTop())*($(this).data('speed'));
			var newPos = 'center '+yShift+'px';
			$(this).css({"background-position":newPos});
		});
	});
   
 });
 /*
$(window).load(function(){
    var images = ['1.jpg','2.jpg','3.jpg'];
    var i = 0;
    var timeoutVar;
     function changeBackground() {
        clearTimeout(timeoutVar);
	    $('.home').css('background-image', function() {
            if (i >= images.length) {
                i=0;
            }
            var bg = 'url(\'style/img/' + images[i++] + '\')';
		  return bg;
        });
	    timeoutVar = setTimeout(changeBackground, 3000);
	//    alert('changed');
    };
    changeBackground(); 
 //   alert('changing');
});*/
