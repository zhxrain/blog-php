<?php

class Post extends \Eloquent {
  protected $fillable = [];
  protected $table = 'posts';

  public function comments()
  {
    return $this->hasMany('Comment');
  }

}
