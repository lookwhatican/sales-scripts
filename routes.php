<?php

return array(
    'home'           => array(
        'pattern'    => '/',
        'controller' => 'QuestionController',
        'action'     => 'index'
    ),

    'question_add'   => array(
        'pattern'    => '/question/add',
        'controller' => 'QuestionController',
        'action'     => 'add',
    ),

   'admin'         => array(
       'pattern'    => '/admin',
       'controller' => 'AdminController',
       'action'     => 'index'
   ),
);