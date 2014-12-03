$(document).ready(function() {
	function setupOwlCarousal(){
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			autoplay: true,
			responsiveClass:true,
			lazyLoad: true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:3,
				},
				1000:{
					items:4,
				}
			}
		});
	}
	function search(){
		var search= $("#search").val();

		$("#content").html("<img alt='ajax search' src='assets/images/vendor/owl_carousel/AjaxLoader.gif'/>");
		$.ajax({
			type:"POST",
			url:"ajax/projects.php",
			data:"search="+search,
			success:function(data){
				$("#content").html(data);
				//$("#search").val("");
				setupOwlCarousal();
			}
		});
	}		
	$("#searchButton").click(function(){
		search();
	});
	$('#search').keyup(function(e) {		
		if(e.keyCode == 13) {
			search();
		}
	});
	setupOwlCarousal();
});