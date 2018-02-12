<?php
  class Pages extends Controller {
    public function __construct() {
      
    }

    public function index() {
      $data =  [
                "title" => "RivrbankMVC"
              ];
      $this->load_view("pages/index", $data);
    }

    public function about() {
      $data =  [
                "title" => "About Us"
              ];
      $this->load_view("pages/about", $data);
    }
  }
?>
