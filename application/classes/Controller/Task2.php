<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Task2 extends Controller {

    private $data = array(
        'invoice_num' => '001212',
        'date' => 'January 12, 2014',
        'price' => '$1050.00'
    );
    public function action_hello()
    {
        GENPDF::make_from_raw("<h1>Hello, World!</h1><h2>Здравствуй, мир!</h2>");
    }

    public function action_invoice()
    {
        $content = View::factory("invoice", $this->data);
        $this->response->body($content);
    }

    public function action_getinvoice(){
        GENPDF::make_invoice('invoice', $this->data, 'src/css/invoice/style.css');
    }
}