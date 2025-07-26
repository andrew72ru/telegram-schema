<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a limit, increased for Premium users @type The type of the limit @default_value Default value of the limit @premium_value Value of the limit for Premium users
 */
class PremiumLimit implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PremiumLimitType|null $type = null,
        #[SerializedName('default_value')]
        private int $defaultValue,
        #[SerializedName('premium_value')]
        private int $premiumValue,
    ) {
    }

    public function getType(): PremiumLimitType|null
    {
        return $this->type;
    }

    public function setType(PremiumLimitType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDefaultValue(): int
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(int $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function getPremiumValue(): int
    {
        return $this->premiumValue;
    }

    public function setPremiumValue(int $premiumValue): self
    {
        $this->premiumValue = $premiumValue;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimit',
            'type' => $this->getType(),
            'default_value' => $this->getDefaultValue(),
            'premium_value' => $this->getPremiumValue(),
        ];
    }
}
