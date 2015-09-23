<ul class="answer-list">
	<?php foreach ($answers as $answer): ?>
	
	<li class="answer-list__item" id="question<?= $answer->question_id ?>">
		<h2>Answer to the question <?= $answer->question_id ?></h2>
		<p><?= $answer->text; ?></p>
	</li>

	<?php endforeach; ?>
</ul>
