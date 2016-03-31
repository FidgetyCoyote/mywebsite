$(function () {

	var $matches = $('#matches');
	var $webpage = "http://cricapi.com/api/cricket/";
	$.ajax({
		type: 'GET',
		url: 'http://cricapi.com/api/cricket/',
		success: function(data) {
			$.each(data.data, function(i, match){
				console.log(match);
				$matches.append("<li>" + match.title + "<a href=\"http://cricapi.com/api/cricketScore?unique_id="+match.unique_id+"\">More</a></li>");
			});
			
		}
	});
});