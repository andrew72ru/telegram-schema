<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Forces an updates.getDifference call to the Telegram servers; for testing only.
 */
class TestGetDifference extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testGetDifference',
        ];
    }
}
