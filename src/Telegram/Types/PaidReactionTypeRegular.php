<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A paid reaction on behalf of the current user.
 */
class PaidReactionTypeRegular extends PaidReactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paidReactionTypeRegular',
        ];
    }
}
