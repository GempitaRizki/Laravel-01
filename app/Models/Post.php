<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'title',
        'content',
    ];

}

/*Di atas, kita menambahkan properti baru 
yang bernama $fillable. Properti tersebut yang dinamakan 
Mass Assigment di Laravel. 
Dimana di dalamnya kita menambahkan field-field yang diizinkan untuk 
melakukan manipulasi data.*/