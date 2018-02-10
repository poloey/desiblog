<?php

use Illuminate\Database\Eloquent\Model;
class Post extends Model {
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}