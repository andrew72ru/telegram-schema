<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a simple network request to the Telegram servers; for testing only. Can be called before authorization
 */
class TestNetwork extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testNetwork',
        ];
    }
}
