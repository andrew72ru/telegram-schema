<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a limit, increased for Premium users. Returns a 404 error if the limit is unknown @limit_type Type of the limit.
 */
class GetPremiumLimit extends PremiumLimit implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('limit_type')]
        private PremiumLimitType|null $limitType = null,
    ) {
    }

    public function getLimitType(): PremiumLimitType|null
    {
        return $this->limitType;
    }

    public function setLimitType(PremiumLimitType|null $limitType): self
    {
        $this->limitType = $limitType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumLimit',
            'limit_type' => $this->getLimitType(),
        ];
    }
}
