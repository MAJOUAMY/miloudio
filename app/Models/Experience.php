<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        "company",
        "company_logo", "function",
        "start_year", "end_year",
        "user_id"
    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
