<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
     protected $table='book_models';

    public $timestamps=false;
    protected $fillable=[
        'id',
        'name',
        "email",
        'message',
    ];
}
