<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
      'desc',
      'number',
      'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }



}
