<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ["title", "description", "image", "url", "user_id"];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
