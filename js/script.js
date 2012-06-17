/* Author:
Ian Clausen
*/

var showNewImage = function(item) {

}

var swapImage = function(item) {
	$('#primaryImage').hide(0, function() {
		$('#primaryImage').removeClass();
		if(item.hasClass('one')) {
			$('#primaryImage').addClass('one');
		} else if (item.hasClass('two')) {
			$('#primaryImage').addClass('two');
		} else if (item.hasClass('three')) {
			$('#primaryImage').addClass('three');
		} else if (item.hasClass('four')) {
			$('#primaryImage').addClass('four');
		} else if (item.hasClass('five')) {
			$('#primaryImage').addClass('five');
		} else if (item.hasClass('six')) {
			$('#primaryImage').addClass('six');
		} else if (item.hasClass('seven')) {
			$('#primaryImage').addClass('seven');
		} else if (item.hasClass('eight')) {
			$('#primaryImage').addClass('eight');
		}
		$('#primaryImage').show(0);
	});	
}

var swapDetails = function(item) {
	$('.itemDetails .description').text('');
	$('.itemDetails .width').text('');
	$('.itemDetails .height').text('');
	$('.itemDetails .depth').text('');
	if(item.hasClass('one')) {
		$('.itemDetails .description').append('This is a little blue table with a red drawer');
		$('.itemDetails .width').append("123 inches");
		$('.itemDetails .height').append("123 inches");
		$('.itemDetails .depth').append("123 inches");
	} else if (item.hasClass('two')) {
		$('.itemDetails .description').append('This is a blue antique dresser');
		$('.itemDetails .width').append("456 inches");
		$('.itemDetails .height').append("456 inches");
		$('.itemDetails .depth').append("456 inches");
	} else if (item.hasClass('three')) {
		$('.itemDetails .description').append('This is a gray dresser');
		$('.itemDetails .width').append("789 inches");
		$('.itemDetails .height').append("789 inches");
		$('.itemDetails .depth').append("789 inches");
	} else if (item.hasClass('four')) {
		$('.itemDetails .description').append('This is a green dresser');
		$('.itemDetails .width').append("012 inches");
		$('.itemDetails .height').append("012 inches");
		$('.itemDetails .depth').append("012 inches");
	} else if (item.hasClass('five')) {
		$('.itemDetails .description').append('This is a another little blue table, but this one does not have a cute red drawer');
		$('.itemDetails .width').append("345 inches");
		$('.itemDetails .height').append("345 inches");
		$('.itemDetails .depth').append("345 inches");
	} else if (item.hasClass('six')) {
		$('.itemDetails .description').append('This is a blue lamp');
		$('.itemDetails .width').append("567 inches");
		$('.itemDetails .height').append("567 inches");
		$('.itemDetails .depth').append("567 inches");
	}
}
$(document).ready(function() {
	$('.thumbnail').hover(function() {
		swapImage($(this));
		swapDetails($(this));
	}, function() {});
});




