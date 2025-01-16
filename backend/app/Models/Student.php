<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Training;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;

    protected $primaryKey = 'neptun_code';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ["neptun_code", "name", "training_id", "admission", "term", "active_term"];

    public function training() : BelongsTo{
        return $this->belongsTo(Training::class);
    }
}
