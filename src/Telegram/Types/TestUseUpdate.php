<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Does nothing and ensures that the Update object is used; for testing only. This is an offline method. Can be called before authorization
 */
class TestUseUpdate extends Update implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testUseUpdate',
        ];
    }
}
