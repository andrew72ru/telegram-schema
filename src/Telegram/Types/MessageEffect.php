<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an effect added to a message.
 */
class MessageEffect implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the effect */
        #[SerializedName('id')]
        private int $id,
        /** Static icon for the effect in WEBP format; may be null if none */
        #[SerializedName('static_icon')]
        private Sticker|null $staticIcon = null,
        /** Emoji corresponding to the effect that can be used if static icon isn't available */
        #[SerializedName('emoji')]
        private string $emoji,
        /** True, if Telegram Premium subscription is required to use the effect */
        #[SerializedName('is_premium')]
        private bool $isPremium,
        /** Type of the effect */
        #[SerializedName('type')]
        private MessageEffectType|null $type = null,
    ) {
    }

    /**
     * Get Unique identifier of the effect.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the effect.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Static icon for the effect in WEBP format; may be null if none.
     */
    public function getStaticIcon(): Sticker|null
    {
        return $this->staticIcon;
    }

    /**
     * Set Static icon for the effect in WEBP format; may be null if none.
     */
    public function setStaticIcon(Sticker|null $staticIcon): self
    {
        $this->staticIcon = $staticIcon;

        return $this;
    }

    /**
     * Get Emoji corresponding to the effect that can be used if static icon isn't available.
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji corresponding to the effect that can be used if static icon isn't available.
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get True, if Telegram Premium subscription is required to use the effect.
     */
    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    /**
     * Set True, if Telegram Premium subscription is required to use the effect.
     */
    public function setIsPremium(bool $isPremium): self
    {
        $this->isPremium = $isPremium;

        return $this;
    }

    /**
     * Get Type of the effect.
     */
    public function getType(): MessageEffectType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the effect.
     */
    public function setType(MessageEffectType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageEffect',
            'id' => $this->getId(),
            'static_icon' => $this->getStaticIcon(),
            'emoji' => $this->getEmoji(),
            'is_premium' => $this->getIsPremium(),
            'type' => $this->getType(),
        ];
    }
}
