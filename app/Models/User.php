<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use App\Models\Certificate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "experience_years",
        "telephone",
        "work_email",
        "available",
        "location",
        "client_number"


    ];


    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function socials()
    {
        return $this->hasMany(Social::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
