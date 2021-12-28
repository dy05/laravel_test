<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Post
 *
 * @property string $title
 * @property string $author
 * @property string $body
 *
 * @property Collection|PostCategory[] $postCategories
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'body',
        'author'
    ];

    /**
     * @return HasMany
     */
    final public function postCategories(): HasMany
    {
        return $this->hasMany(PostCategory::class, 'post_id');
    }
}
