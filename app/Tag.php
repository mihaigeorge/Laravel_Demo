<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Tag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The books that belong to the tag.
     */
    public function books()
    {
        return $this->belongsToMany('App\Book', 'book_tag', 'id_tag', 'id_book');
    }
}
