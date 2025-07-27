<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user asked to hide sponsored messages, but Telegram Premium is required for this.
 */
class ReportSponsoredResultPremiumRequired extends ReportSponsoredResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSponsoredResultPremiumRequired',
        ];
    }
}
