<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A limit was exceeded @limit_type Type of the exceeded limit.
 */
class PremiumSourceLimitExceeded extends PremiumSource implements \JsonSerializable
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
            '@type' => 'premiumSourceLimitExceeded',
            'limit_type' => $this->getLimitType(),
        ];
    }
}
