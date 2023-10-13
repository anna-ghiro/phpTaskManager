<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'description',
        'priority',
        'developer',
        'status'
    ];

    /**
    * Get the developer that owns the task.
    */
    public function developer()
    {
     return $this->belongsTo(User::class);
    }
}
