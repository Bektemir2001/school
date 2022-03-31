<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function lesson(){
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
    public function klass(){
        return $this->belongsToMany(Klass::class, 'teacher_klasses', 'teacher_id', 'klass_id', 'id');
    }
}
