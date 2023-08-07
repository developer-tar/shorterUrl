<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUrl extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'original_url',
        'shortner_url',
        
    ];
  
    public function hiturl(){
        return $this->belongsToMany(User::class,'hit_urls');
    }
    
}
