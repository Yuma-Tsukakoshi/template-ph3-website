<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Choice;


class Question extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'content',
        'image',
        'supplement',
        // 'deleted_at',
    ];

    protected $guarded = [
        'id',
        'quiz_id',
    ];
    protected $dates = [
        'deleted_at',
    ];

    public function choices()
    {
        // 1対多の関係を定義
        return $this->hasMany(Choice::class);
    }
}
