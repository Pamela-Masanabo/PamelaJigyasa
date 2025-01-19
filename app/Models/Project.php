<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Define the fillable properties (columns that can be mass-assigned)
    protected $fillable = ['name', 'description', 'status', 'customer_id', 'freelancer_id'];

    // Define the status constants (for better readability and maintainability)
    const STATUS_ACTIVE = 'active';
    const STATUS_COMPLETED = 'completed';
    const STATUS_IN_PROGRESS = 'in-progress';

    // Relationship with the Customer (User)
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    // Relationship with the Freelancer (User)
    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    // Optional: Relationship with messages or tasks related to the project, if applicable
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // Get the project status in human-readable format (optional method)
    public function getStatusTextAttribute()
    {
        switch ($this->status) {
            case self::STATUS_ACTIVE:
                return 'Active';
            case self::STATUS_COMPLETED:
                return 'Completed';
            case self::STATUS_IN_PROGRESS:
                return 'In Progress';
            default:
                return 'Unknown';
        }
    }
}
