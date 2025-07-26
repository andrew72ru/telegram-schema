<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The maximum number of joined supergroups and channels
 */
class PremiumLimitTypeSupergroupCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeSupergroupCount',
        ];
    }
}
