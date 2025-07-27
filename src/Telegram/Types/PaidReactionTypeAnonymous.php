<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An anonymous paid reaction.
 */
class PaidReactionTypeAnonymous extends PaidReactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paidReactionTypeAnonymous',
        ];
    }
}
