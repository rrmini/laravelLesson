<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public static $allowedFields = ['id','category_id', 'title', 'author', 'status', 'content'];

    public function getNews(): Collection
    {
        return \DB::table($this->table)
            ->select($this->allowedFields)
            ->get();
    }

    public function getNewsById(int $id): object
    {
        $result =  \DB::table($this->table)
            ->select($this->allowedFields)
            ->find($id);

        if($result === null) {
            abort(404);
        }
        return $result;
    }

    public function getNewsByCategoryId (int $category_id)
    {
        $result = \DB::table($this->table)
            ->find($category_id);
        return $result;
    }

    public function getCount()
    {
        return \DB::table($this->table)->count();
    }
}
