<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes, Timestamp;
    protected $fillable = [
        'name',
        'department_id',
    ];
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
