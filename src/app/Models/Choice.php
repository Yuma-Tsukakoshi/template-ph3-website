<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
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
    }
}
