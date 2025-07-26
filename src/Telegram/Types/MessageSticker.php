<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A sticker message @sticker The sticker description @is_premium True, if premium animation of the sticker must be played
 */
class MessageSticker extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        #[SerializedName('is_premium')]
        private bool $isPremium,
    ) {
    }

    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function setIsPremium(bool $isPremium): self
    {
        $this->isPremium = $isPremium;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSticker',
            'sticker' => $this->getSticker(),
            'is_premium' => $this->getIsPremium(),
        ];
    }
}
