<?php

class TemplateController
{
  //MAIN VIEW TEMPLATE
  public function index()
  {
    include 'views/template.php';
  }

  //main route url
  static public function path()
  {
    if (!empty($_SERVER["HTPPS"]) && ('on' == $_SERVER["HTTPS"])) {
      return "https://" . $_SERVER['SERVER_NAME'] . "/freelance/web/";
    } else {
      return "http://" . $_SERVER['SERVER_NAME'] . "/freelance/web/";
    }
  }
}
