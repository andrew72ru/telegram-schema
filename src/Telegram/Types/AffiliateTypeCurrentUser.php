<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The affiliate is the current user
 */
class AffiliateTypeCurrentUser extends AffiliateType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateTypeCurrentUser',
        ];
    }
}
