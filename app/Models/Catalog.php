<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = ['freelancer_id', 'skills', 'description'];

    // Relationship with the Freelancer (User)
    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }
}

