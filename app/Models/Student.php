<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $guarded = false;


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function klass(){
        return $this->belongsTo(Klass::class, 'klass_id', 'id');
    }
}
