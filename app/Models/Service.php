<?php

namespace App\Models;

use App\Models\Scopes\WhereLangScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $validated)
 */
class Service extends Model
{
    use HasFactory;
    protected $table = "services";

   /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
        'name',
        'lang'
     ];


    protected static function booted()
    {
        static::addGlobalScope(new WhereLangScope);
    }

}
