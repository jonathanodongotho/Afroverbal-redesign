<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proverb extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'slug',
        'proverb_text',
        'proverb_translation',
        'teaching',
        'context_id',
        'tribe_id',
        'author'
    ];

    public function context() {
        return $this->belongsTo(Context::class);
    }

    public function tribe() {
        return $this->belongsTo(Tribe::class);
    }
}
