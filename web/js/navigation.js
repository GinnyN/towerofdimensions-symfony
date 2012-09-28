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
				$(".mercenario").on("click", detail);
		}
	});
}

function back()
{
	$("#container").animate({ marginLeft: 0 }, 500);
}

function backFirst()
{
	$("#container").animate({ marginLeft: "-"+width }, 500);
}

function detail()
{
	id = $(this).attr("id");

	$("#container").animate({ marginLeft: "-"+(2*width) }, 500);

	$.ajax({
		type : 'GET',
		url : '/app_dev.php/mercenaries/detail/'+id+"/",
		dataType: 'html',
		success: function(result){
				$("#section-2").html(result);
				$(".back-menu-first").on("click", backFirst);
		}
	});
}

