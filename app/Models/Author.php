<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //memberikan akses data apa saja yang bisa di lihat
      protected $visible = ['name'];
      //memberikan akses data apa saja yang bisa diisi
      protected $fillable = ['name'];
      //mencatat waktu pembuatan dan update data otomatis
      public $timestamps = true;
      // membuat relasi one to many

      public function books () {
          // data model "authors" bisa memiliki banyak data
          //dari model "book" memalalui fk "author_id"
          $this->hasMany('App\Models\Book','author_id');
      }
}
