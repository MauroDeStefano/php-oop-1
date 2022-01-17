<?php

class Movie{
  public $title;
  public $genre;
  public $duration;
  public $cast;

  function __construct($_title, $_duration)
  {
    $this->title = $_title;
    $this->duration = $_duration;
  }

  function setNewTitle($string){
    $this->title = $string;
  }
  function getTitle(){
    return $this->title;
  }
}