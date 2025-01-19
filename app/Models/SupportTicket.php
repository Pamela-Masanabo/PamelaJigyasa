<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = ['user_id', 'subject', 'status'];

    // Relationship with the User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

