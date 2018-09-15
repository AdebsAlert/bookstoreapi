<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['book_id', 'user_id', 'rating'];

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
