<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Model{

    private $table = "news";

    public function get_data(){
        $sql = "select * from ".$this->table;

        return DB::query(Database::SELECT, $sql)->execute('alternate');
    }

    public function add_news($news){
        $sql = 'insert into '.$this->table.' (title, author, date, text) VALUES (:title, :author, :date, :text)';
        $query = DB::query(Database::INSERT, $sql);
        $query->parameters(array(
            ':title' => $news['title'],
            ':author' => $news['author'],
            ':date' => $news['date'],
            ':text' => $news['text']
        ));
        $query->execute('alternate');
    }
}