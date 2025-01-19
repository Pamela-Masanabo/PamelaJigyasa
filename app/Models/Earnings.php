<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earnings extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = ['freelancer_id', 'amount', 'date'];

    // Relationship with the Freelancer (User)
    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }
}

