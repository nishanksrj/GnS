$(document).ready(function(){
    $('div.details').load('races.php');
			 $('.details').load('races.php');
           $('.left-menu a').each(function(){
               $(this).click(function(event){
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
});