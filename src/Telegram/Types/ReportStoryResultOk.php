<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The story was reported successfully.
 */
class ReportStoryResultOk extends ReportStoryResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportStoryResultOk',
        ];
    }
}
