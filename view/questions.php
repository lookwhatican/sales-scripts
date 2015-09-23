<ul class="question-list">
	<?php foreach ($questions as $question): ?>

	<li class="question-list__item" id="question<?= $question->id ?>">
		<a class="question-list__link" href=""><?= $question->id?> <?= $question->text ?></a>
	</li>

	<?php endforeach; ?>
</ul>
