<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The log is written to stderr or an OS specific log
 */
class LogStreamDefault extends LogStream implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'logStreamDefault',
        ];
    }
}
