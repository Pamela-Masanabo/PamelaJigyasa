<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
    public function isRole(string $role): bool
    {
        return $this->role === $role;
    }

    public function projectsAsCustomer()
    {
        return $this->hasMany(Project::class, 'customer_id');
    }

    // Define the relationship with the projects as freelancer (one-to-many)
    public function projectsAsFreelancer()
    {
        return $this->hasMany(Project::class, 'freelancer_id');
    }

    // Relationship with messages (one-to-many)
    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }


}
