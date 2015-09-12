<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Task1 extends Controller_Template {

	public $template = 'template';

	public function action_main()
	{
		$data = array();
		$content = View::factory('pages/main')
			->bind('data', $data);

		$model = new Model_Main();
		$data = $model->get_data();
		$this->template->content = $content;
		$this->template->script = "main.js";
		$this->template->main = "active";
	}

	public function action_news()
	{
		$data = array();
		$content = View::factory('pages/news')
			->bind('data', $data);

		$model = new Model_News();
		$data = $model->get_data();
		$this->template->content = $content;
		$this->template->script = "news.js";
		$this->template->news = "active";
	}

	public function action_gallery()
	{
		$content = View::factory('pages/gallery');

		$model = new Model_Gallery();
		$images = $model->get_data();

		$content->dir = "/uploads/";
		$content->images =$images;
		$this->template->content = $content;
		$this->template->script = "gallery.js";
		$this->template->gallery = "active";
	}

	public function action_upload()
	{
		if( isset($_FILES['image']) &&
			Upload::not_empty($_FILES['image']) &&
			Upload::valid($_FILES['image']) &&
			Upload::type($_FILES['image'], array('jpg', 'jpeg', 'png', 'gif')))
		{
			$path = explode('/',Upload::save($_FILES['image'], NULL, DOCROOT.'uploads/')); // execute save image and get path
			$filename = $path[sizeof($path)-1];

			$model = new Model_Gallery();
			$model->add_image($filename);
		}
		$this->redirect("task1/gallery");
	}

}