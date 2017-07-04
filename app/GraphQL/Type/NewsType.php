<?php

namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class NewsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'News',
        'description' => 'A news'
    ];

  /*
	 * Uncomment following line to make the type input object.
	 * http://graphql.org/learn/schema/#input-types
	 */
    // protected $inputObject = true;

    public function fields()
    {
        return [
            'newsId' => [
                'type' => Type::nonNull(Type::Int()),
                'description' => 'The id of the news'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The news title'
            ],
            'content' => [
                'type' => Type::string(),
                'description' => 'The news content'
            ],
            'summary' => [
                'type' => Type::string(),
                'description' => 'The news summary'
            ],
            'publishAt' => [
                'type' => Type::Int(),
                'description' => 'The publish time of news'
            ],
            'isIndex' => [
                'type' => Type::Int(),
                'description' => 'Whether the news is a headline or not'
            ],
            'author' => [
                'type' => GraphQL::type('User'),
                'description' => 'The author of news'
            ],
        ];
    }
}
