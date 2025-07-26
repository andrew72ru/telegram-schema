<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with an upgraded gift
 */
class PushMessageContentUpgradedGift extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift */
        #[SerializedName('is_upgrade')]
        private bool $isUpgrade,
    ) {
    }

    /**
     * Get True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift
     */
    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    /**
     * Set True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift
     */
    public function setIsUpgrade(bool $isUpgrade): self
    {
        $this->isUpgrade = $isUpgrade;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentUpgradedGift',
            'is_upgrade' => $this->getIsUpgrade(),
        ];
    }
}
