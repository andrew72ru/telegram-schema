<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of features available for different chat boost levels. This is an offline method.
 */
class GetChatBoostFeatures extends ChatBoostFeatures implements \JsonSerializable
{
    public function __construct(
        /** Pass true to get the list of features for channels; pass false to get the list of features for supergroups */
        #[SerializedName('is_channel')]
        private bool $isChannel,
    ) {
    }

    /**
     * Get Pass true to get the list of features for channels; pass false to get the list of features for supergroups.
     */
    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    /**
     * Set Pass true to get the list of features for channels; pass false to get the list of features for supergroups.
     */
    public function setIsChannel(bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatBoostFeatures',
            'is_channel' => $this->getIsChannel(),
        ];
    }
}
