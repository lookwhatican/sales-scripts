$(document).ready(function() {

	$('.question-list__link').on('click', function(e) {
		e.preventDefault();
	 
		var questionLink = $(this),

			questionItem = questionLink.parent(),

			questionId = questionItem.attr('id'),

			answerList = $('.answer-list');


		var a = answerList.find('#'+questionId);

		a.siblings().removeClass('active');

		a.each(function(indx, element){
			$(element).addClass('active');
		});
	});
});