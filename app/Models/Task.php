<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'category_name',
        'due_date'
    ];

    protected $casts = [
        'due_date' => 'date'
    ];

    public $timestamps = true;
}
