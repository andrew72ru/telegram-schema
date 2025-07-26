<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the link for downloading official Telegram application to be used when the current user invites friends to Telegram
 */
class GetApplicationDownloadLink extends HttpUrl implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getApplicationDownloadLink',
        ];
    }
}
