<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\User;

class UsersQuery extends Query
{

    protected $attributes = [
        'name' => 'users'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function args()
    {
        return [
            'userId' => ['name' => 'userId', 'type' => Type::Int()],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['userId'])) {
            return User::where('userId', $args['userId'])->get();
        } else {
            return User::all();
        }
    }
}
