<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Invoice extends Controller {

    public function action_pdf(){
        GENPDF::make_invoice('invoice2', null, 'src/css/invoice/invoice.css');
    }

    public function action_html(){
        $content = View::factory("invoice2");
        $this->response->body($content);
    }
}