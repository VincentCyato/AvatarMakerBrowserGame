<?php
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->title directly
    public $id;
    public $title;
    public $description;
    public $image;
    public $link;

    public function __construct($id, $title, $description,$image,$link) {
      $this->id      = $id;
      $this->title  = $title;
      $this->description = $description;
      $this->image = $image;
      $this->link = $link;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts order by id desc');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['title'], $post['description'], $post['image'], $post['link']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['title'], $post['description'], $post['image'], $post['link']);
    }
  }
?>