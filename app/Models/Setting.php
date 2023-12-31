<?php

namespace App\Models;

use App\Models\Scopes\WhereLangScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $validated)
 */
class Setting extends Model
{
    use HasFactory;

   /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
        'header_image',
        'header_big',
        'header_small',
        'about',
        'lang'
     ];
     protected static function booted()
     {
         static::addGlobalScope(new WhereLangScope);
     }

}
