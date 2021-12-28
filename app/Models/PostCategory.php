<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PostCategory
 *
 * @property int $id
 * @property string $name
 * @property int $post_id
 *
 * @property Post $post
 */
class PostCategory extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'post_id',
    ];

    /**
     * @return BelongsTo
     */
    final public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
