<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of features available on the specific chat boost level. This is an offline method.
 */
class GetChatBoostLevelFeatures extends ChatBoostLevelFeatures implements \JsonSerializable
{
    public function __construct(
        /** Pass true to get the list of features for channels; pass false to get the list of features for supergroups */
        #[SerializedName('is_channel')]
        private bool $isChannel,
        /** Chat boost level */
        #[SerializedName('level')]
        private int $level,
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

    /**
     * Get Chat boost level.
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set Chat boost level.
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatBoostLevelFeatures',
            'is_channel' => $this->getIsChannel(),
            'level' => $this->getLevel(),
        ];
    }
}
