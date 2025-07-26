<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sponsored message is too old or not found
 */
class ReportSponsoredResultFailed extends ReportSponsoredResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSponsoredResultFailed',
        ];
    }
}
