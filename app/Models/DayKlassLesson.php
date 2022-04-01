<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayKlassLesson extends Model
{
    use HasFactory;
    protected $table = 'day_klass_lesson';
    protected $guarded = false;
}
