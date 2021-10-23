<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Expr\FuncCall;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill(){
     return $this->hasMany(Skill::class, 'user_id', 'id');   
    }

    public function education(){
        return $this->hasMany(Educacion::class, 'user_id', 'id');
    }

    public function aboutme(){
        return $this->hasMany(AboutMe::class, 'user_id', 'id');
    }

    public function featuredProyects(){
        return $this->hasMany(FeaturedProyects::class, 'user_id', 'id');
    }

    
    public function workExperience(){
        return $this->hasMany(WorkExperience::class, 'user_id', 'id');
    }

    public function posts(){
        return $this->hasMany(Posts::class, 'user_id', 'id');
    }

    public function contact(){
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }
}
