<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller{

    public function action_updateText(){

        if( !isset($_POST['new_text']))
            return;

        $newText = trim($_POST['new_text']);
        $model = new Model_Main();
        $model->update_text($newText);

    }

    public function action_addNews(){
        if( !isset($_POST['title']) || !isset($_POST['author']) || !isset($_POST['text']))
            return;

        $input['title'] = trim($_POST['title']);
        $input['author'] = trim($_POST['author']);
        $input['text'] = trim($_POST['text']);
        $input['date'] = date('Ymd');

        $model = new Model_News();
        $model->add_news($input);
    }
}