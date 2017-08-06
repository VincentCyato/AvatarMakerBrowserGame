<?php
  class PagesController {
    public function home() {     
      $posts = Post::all();
      require_once(getcwd().'/Views/pages/home.php');
    }
    public function avatar_maker()
    {
      require_once(getcwd().'/Views/pages/avatar_maker.php');
    }
    public function admin(){
      require_once(getcwd().'/Admin/control.php');
    }
    public function error() {
      require_once(getcwd().'/Views/pages/error.php');
    }
    public function chat_room()
    {
      require_once(getcwd().'/Views/pages/chat_room.php');
    }
    public function chat_room_post()
    {
      require_once(getcwd().'/Views/pages/chat_room_post.php');
    }
    public function artwork()
    {
      require_once(getcwd().'/Views/pages/artwork.php');
    }
    public function about()
    {
      require_once(getcwd().'/Views/pages/about.php');
    }
    public function manga()
    {
      require_once(getcwd().'/Views/pages/manga.php');
    }
     public function fanart()
    {
      require_once(getcwd().'/Views/pages/fanart.php');
    }
    public function commissions()
    {
      require_once(getcwd().'/Views/pages/commissions.php');
    }
  }
?>