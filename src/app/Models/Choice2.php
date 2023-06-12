<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice2 extends Model
{
    use softDeletes;
    use HasFactory;
    protected $fillable = [
        'name',
        'valid',
    ];

    protected $guarded = [
        'id',
        'question_id',
    ];

    public function choices()
    {
        return $this;
        // return $this->belongsTo(Question::class, 'question_id');
    }
}
