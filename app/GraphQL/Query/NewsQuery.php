<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\News;

class NewsQuery extends Query
{
    protected $attributes = [
        'name' => 'news'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('News'));
    }

    public function args()
    {
        return [
            'newsId' => ['name' => 'newsId', 'type' => Type::Int()],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['newsId'])) {
            return News::where('newsId', $args['newsId'])->where('status', 4)->get();
        } else {
            return News::where('status', 4)->get();
        }
    }
}
