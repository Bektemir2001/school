<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klass extends Model
{
    use HasFactory;

    protected $table = 'klasses';
    protected $guarded = false;
    public function teacher(){
        return $this->belongsToMany(Teacher::class, 'teacher_klasses', 'klass_id', 'teacher_id', 'id');
    }
}
