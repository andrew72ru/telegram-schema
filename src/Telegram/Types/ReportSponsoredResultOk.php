<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was reported successfully
 */
class ReportSponsoredResultOk extends ReportSponsoredResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSponsoredResultOk',
        ];
    }
}
