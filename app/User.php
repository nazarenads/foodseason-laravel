<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'bio', 'país', 'teléfono', 'password', 'profile_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getImageAttribute()  {
      return $this->profile_image;
    }

    public function follows() {
      return $this->belongsToMany(User::class, 'followers', 'user_id', 'followed_id');
  }

  public function followers() {
      return $this->belongsToMany(User::class, 'followers', 'followed_id', 'user_id');
  }

  public function isFollowing(User $user) {
      return $this->follows->contains($user);
  }
}
