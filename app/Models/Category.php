<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['title', 'description'];

//    public function getCategories(): Collection
//    {
//        return \DB::table($this->table)->select(['id', 'title', 'desc'])->get();
//    }
//
//    public function getCategoryById(int $id): object
//    {
//        return \DB::table($this->table)->select(['id', 'title', 'desc'])->find($id);
//    }
//
//    public function getCount()
//    {
//        return \DB::table($this->table)->count();
//    }
}
