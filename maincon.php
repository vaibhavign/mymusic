<?php
  // main connection file for the application

class mainconn {
  // constructor goes here
  public function mainconn(){
    mysql_connect("192.168.1.106", "o2odb", "s@pphire") or die(mysql_error());
    mysql_select_db("api") or die(mysql_error());
 }

  public function chooseRandomSongs(){
    $today = date("dmY");
    // choose random songs from the data list
    $queryRandom = mysql_select();

  }


}

?>