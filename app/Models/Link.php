<?php

namespace App\Models;

use App\Models\Scopes\WhereLangScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

   /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
        'name',
        'link',
        'lang'
     ];

     protected static function booted()
     {
         static::addGlobalScope(new WhereLangScope);
     }

}
