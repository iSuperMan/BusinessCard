<?php defined('SYSPATH') or die('No direct script access.');

class Model_Gallery extends Model{
    private $table = "gallery";

    public function get_data(){
        $sql = "select * from ".$this->table;

        return DB::query(Database::SELECT, $sql)->execute('alternate');
    }

    public function add_image($img_name){
        $sql = "insert into ".$this->table." (img) values(:img)";
        $query = DB::query(Database::INSERT, $sql);
        $query->param(":img", $img_name);
        $query->execute('alternate');
    }
}