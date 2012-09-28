$(document).on("ready", menu);

var width;

function menu()
{
	width = $("nav").width();

	$("nav #mercenaries").on("click", mercenaries);
}

function mercenaries()
{
	$("#container").animate({ marginLeft: "-"+width }, 500);
	
	$.ajax({
		type : 'GET',
		url : '/app_dev.php/mercenaries/',
		dataType: 'html',
		success: function(result){
				$("#section-1").html(result);
				$(".back-menu").on("click", back);
		}
	});
}

function back()
{
	$("#container").animate({ marginLeft: 0 }, 500);
}