<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'content',
        'assigner_id',
        'deadline',
        'working_hours',
        'is_completed',
        'completed_at',
        'is_deleted',
        'deleted_at',
        'updated_at',
        'created_at',
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

    protected $dates = ['updated_at', 'created_at'];

    public function assigner() {
        return $this->belongsTo(Assigner::class);
    }
}
