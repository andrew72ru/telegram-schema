<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sponsored messages were hidden for the user in all chats
 */
class ReportSponsoredResultAdsHidden extends ReportSponsoredResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSponsoredResultAdsHidden',
        ];
    }
}
