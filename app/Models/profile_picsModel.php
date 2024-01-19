<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_picsModel extends Model
{
    use HasFactory;
    protected $table = 'profile_picsTable';
    protected $fillable = [
        'profile_pics'
    ];
    public function user(){
        return $this->belongsTo(App\Models\User::class,'user_id');
    }
}
