<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Types\This;

class Category extends Model
{
    use HasFactory;

    public static $allowedFields = ['id', 'title'];

    protected $table = 'categories';

    protected $fillable = [
        'title',
        'description'
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }

}
