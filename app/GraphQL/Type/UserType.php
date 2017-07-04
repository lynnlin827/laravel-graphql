<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{

    protected $attributes = [
        'name' => 'User',
        'description' => 'A user'
    ];

  /*
	 * Uncomment following line to make the type input object.
	 * http://graphql.org/learn/schema/#input-types
	 */
    // protected $inputObject = true;

    public function fields()
    {
        return [
            'userId' => [
                'type' => Type::nonNull(Type::Int()),
                'description' => 'The id of the user',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'User name',
            ],
            'code' => [
                'type' => Type::string(),
                'description' => 'User code',
            ],
        ];
    }
}
