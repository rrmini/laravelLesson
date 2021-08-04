<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $categoryList = [
        [
            'id' => 1,
            'title' => 'politics',
            'desc' => 'all about politics'
        ],
        [
            'id' => 2,
            'title' => 'science',
            'desc' => 'all about science'
        ],
        [
            'id' => 3,
            'title' => 'culture',
            'desc' => 'all about culture'
        ],
        [
            'id' => 4,
            'title' => 'sports',
            'desc' => 'all about sports'
        ],
        [
            'id' => 5,
            'title' => 'weather',
            'desc' => 'all about the weather'
        ],

    ];

    protected $newsList = [
        [
            'id' => 1,
            'categoryId' => 1,
            'title' => 'news 1',
            'content' => 'Content news 1'
        ],
        [
            'id' => 2,
            'categoryId' => 1,
            'title' => 'news 2',
            'content' => 'Content news 2'
        ],
        [
            'id' => 3,
            'categoryId' => 1,
            'title' => 'news 3',
            'content' => 'Content news 3'
        ],
        [
            'id' => 4,
            'categoryId' => 1,
            'title' => 'news 4',
            'content' => 'Content news 4'
        ],
        [
            'id' => 5,
            'categoryId' => 2,
            'title' => 'news 5',
            'content' => 'Content news 5'
        ],
        [
            'id' => 6,
            'categoryId' => 2,
            'title' => 'news 6',
            'content' => 'Content news 6'
        ],
        [
            'id' => 7,
            'categoryId' => 2,
            'title' => 'news 7',
            'content' => 'Content news 7'
        ],
        [
            'id' => 8,
            'categoryId' => 2,
            'title' => 'news 8',
            'content' => 'Content news 8'
        ],
        [
            'id' => 9,
            'categoryId' => 3,
            'title' => 'news 9',
            'content' => 'Content news 9'
        ],
        [
            'id' => 10,
            'categoryId' => 3,
            'title' => 'news 10',
            'content' => 'Content news 10'
        ],
        [
            'id' => 11,
            'categoryId' => 3,
            'title' => 'news 11',
            'content' => 'Content news 11'
        ],
        [
            'id' => 12,
            'categoryId' => 3,
            'title' => 'news 12',
            'content' => 'Content news 12'
        ],
        [
            'id' => 13,
            'categoryId' => 4,
            'title' => 'news 13',
            'content' => 'Content news 13'
        ],
        [
            'id' => 14,
            'categoryId' => 4,
            'title' => 'news 14',
            'content' => 'Content news 14'
        ],
        [
            'id' => 15,
            'categoryId' => 4,
            'title' => 'news 15',
            'content' => 'Content news 15'
        ],
        [
            'id' => 16,
            'categoryId' => 4,
            'title' => 'news 16',
            'content' => 'Content news 16'
        ],
        [
            'id' => 17,
            'categoryId' => 5,
            'title' => 'news 17',
            'content' => 'Content news 17'
        ],
        [
            'id' => 18,
            'categoryId' => 5,
            'title' => 'news 18',
            'content' => 'Content news 18'
        ],
        [
            'id' => 19,
            'categoryId' => 5,
            'title' => 'news 19',
            'content' => 'Content news 19'
        ],
        [
            'id' => 20,
            'categoryId' => 5,
            'title' => 'news 20',
            'content' => 'Content news 20'
        ],

    ];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
