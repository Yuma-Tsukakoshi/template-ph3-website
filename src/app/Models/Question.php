<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;


class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'image',
        'supplement',
    ];

    protected $guarded = [
        'id',
        'quiz_id',
    ];

    public function choices()
    {
        // 1対多の関係を定義
        return $this->hasMany(Choice::class);
    }
}
