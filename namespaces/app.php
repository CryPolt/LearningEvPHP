<?php
namespace App;

include "helper.php";

use Helper\Display as HelperDisplay;

class Display
{
  public static function getPosts()
  {
      echo "getting posts from app.php";

  }
}

HelperDisplay::getPosts();