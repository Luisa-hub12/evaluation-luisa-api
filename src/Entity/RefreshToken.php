<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;
use ApiPlatform\OpenApi\Model\Operation as OpenApiOperation;
use App\Dto\User\UserDetailsOutput;
use App\Dto\User\UserRegisterInput;
use App\State\User\UserRegisterProcessor;
use Doctrine\ORM\Mapping as ORM;
use Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken as BaseRefreshToken;
use Symfony\Bridge\Doctrine\Types\UuidType;

#[ApiResource(
    operations: [
        new Post(
            uriTemplate: '/auth/refresh',
            input: UserRegisterInput::class,
            output: UserDetailsOutput::class,
            processor: UserRegisterProcessor::class,
            openapi: new OpenApiOperation(security: []),
        ),
    ],
)]
#[ORM\Entity]
#[ORM\Table(name: 'refresh_tokens')]
class RefreshToken extends BaseRefreshToken {



}
