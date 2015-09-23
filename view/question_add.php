
<form action="/question/add" method="post">

    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" class="form-control" id="text" cols="50" rows="6"></textarea>
    </div>

    <div class="form-group">
        <label for="question">Question</label>
        <select name="question" class="form-control" id="question">
            <?php foreach($question_add as $question):?>
            <option value="<?= $question->id ?>"><?= $question->text ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>