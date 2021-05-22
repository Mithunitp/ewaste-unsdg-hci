var current_fs,next_fs,previous_fs;

var left,opacity,scale;
var animation;


$(".next").click(function(){

	if(animation)return false;
	animation=true;

	current_fs=$(this).parent();
	next_fs= $(this).parent().next();

	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	next_fs.show();
	current_fs.animate({opacity:0},{
		step:function(now,mx){

			scale=1-(1-now)*.85;
			left=(now*100)+"%";
			opacity=1+now;

			current_fs.css({
				'transform':'scale('+scale+')',
				'position':'absolute'
			});
			next_fs.css({'left':left,'opacity':opacity});
		},
		duration:1000,
		complete:function(){
			current_fs.hide();
			animation=false;
		},
		easing:'easeInOutBack'
	});

});


$(".previous").click(function(){

	if(animation)return false;
	animation=true;

	current_fs=$(this).parent();
	previous_fs= $(this).parent().prev();

	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	previous_fs.show();
	current_fs.animate({opacity:0},{
		step:function(now,mx){

			scale=0.8 + (1-now)*0.2;
			left=((1-now)*80)+"%";
			opacity=1+now;

			current_fs.css({
				'left':left
			});
			previous_fs.css({'transform':'scale('+scale+')','opacity':opacity});
		},
		duration:1000,
		complete:function(){
			current_fs.hide();
			animation=false;
		},
		easing:'easeInOutBack'
	});

}); 

 