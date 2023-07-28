<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'user_id'
      ];

    public function user() {
        return $this->belongsTo(User::class);
      }

      // To create PLan for The same User id ..
      /*
      protected static function booted()
      {
        static::creating(function ($plan) {
            $plan->user_id = Auth::id();
        });
      }
      */


}
