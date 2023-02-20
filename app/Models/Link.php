<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'user_id', 'valid_until'];

    public static function createNewLink($id)
    {
        $slug = Str::random(10);

        Link::create([
            'slug' => $slug,
            'user_id' => $id,
            'valid_until' => now()->addDays(7)
        ]);

        return $slug;
    }

    public function scopeSlug($query, $slug)
    {
        $query->where('slug', $slug);
    }

    public function scopeValid($query)
    {
        $query->where('valid_until', '>', now());
    }
}
