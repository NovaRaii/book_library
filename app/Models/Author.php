<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'nationality', 'age', 'gender'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
