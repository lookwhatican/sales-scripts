<?php

class Answer extends Model
{
    public $id;
    public $text;
    public $question_id;

	protected static $table = 'answers';

    // public function save()
    // {
    //     $db = new DataBase;
    //     $query = 'INSERT INTO ' . static::$table . ' (id, text, question_id)
    //                 VALUES (:id, :text, :question_id)';
    //     $db->query($query, [':id' => $this->id,
    //                         ':text' => $this->text,
    //                         ':question_id' => $this->question_id]);
    //     return true;
    // }
}