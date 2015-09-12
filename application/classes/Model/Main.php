<?php defined('SYSPATH') or die('No direct script access.');

class Model_Main extends Model{
    private $table = "main";

    public function get_data(){
        $sql = "select * from ".$this->table;

        return DB::query(Database::SELECT, $sql)->execute('alternate');
    }

    public function update_text($new_text){
        $sql = 'update '.$this->table.' set content = :text';
        $query = DB::query(Database::INSERT, $sql);
        $query->param(':text', $new_text);
        $query->execute('alternate');
    }
}