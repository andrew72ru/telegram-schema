<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Does nothing; for testing only. This is an offline method. Can be called before authorization
 */
class TestCallEmpty extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testCallEmpty',
        ];
    }
}
