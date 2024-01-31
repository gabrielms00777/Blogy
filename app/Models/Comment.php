<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'name',
        'email',
        'message',
        'visible',
    ];

    protected $casts = [
        'visible' => 'boolean',
    ];

    public function createdAt():Attribute
    {
        return Attribute::make(get: fn (string $value) => Carbon::parse($value)->format('d/m/Y'));
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
