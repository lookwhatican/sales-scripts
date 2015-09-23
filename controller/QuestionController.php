<?php

class QuestionController extends Controller
{
	public function indexAction()
	{
		$view = new View;
		return $view->render('layout.php', array('questions' => Question::find('all'),
												'answers' => Answer::find('all')));
	}


	public function addAction()
	{
		// if ($this->isPost()) {
  //           $post = new Post();
  //           $date = new \DateTime();
  //           $post->title = $this->post('title');
  //           $post->description = $this->post('description');
  //           $post->text = trim($this->post('text'));
  //           $post->date = $date->format('Y-m-d H:i:s');
  //           $post->category_id = $this->post('category_id');
  //           $post->save();
  //           return $this->redirect($this->generateRoute('home'));
  //       }
		$view = new View;
		return $view->render('layout.php', array('question_add' => Question::find('all')));
	}


    // public function deleteAction($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect($this->generateRoute('home'));
    // }
}