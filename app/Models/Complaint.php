<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $fillable=[
        'title',
        'description',
        'status',
        'current_tier',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
