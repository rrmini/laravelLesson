<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;


class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public static $allowedFields = ['id','category_id', 'title', 'author', 'status', 'content', 'updated_at'];

    protected $fillable = ['category_id','title', 'content', 'author', 'status', 'image'];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'category_id', 'id');
    }
}
