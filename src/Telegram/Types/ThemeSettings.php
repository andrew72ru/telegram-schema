<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes theme settings.
 */
class ThemeSettings implements \JsonSerializable
{
    public function __construct(
        /** Theme accent color in ARGB format */
        #[SerializedName('accent_color')]
        private int $accentColor,
        /** The background to be used in chats; may be null */
        #[SerializedName('background')]
        private Background|null $background = null,
        /** The fill to be used as a background for outgoing messages */
        #[SerializedName('outgoing_message_fill')]
        private BackgroundFill|null $outgoingMessageFill = null,
        /** If true, the freeform gradient fill needs to be animated on every sent message */
        #[SerializedName('animate_outgoing_message_fill')]
        private bool $animateOutgoingMessageFill,
        /** Accent color of outgoing messages in ARGB format */
        #[SerializedName('outgoing_message_accent_color')]
        private int $outgoingMessageAccentColor,
    ) {
    }

    /**
     * Get Theme accent color in ARGB format.
     */
    public function getAccentColor(): int
    {
        return $this->accentColor;
    }

    /**
     * Set Theme accent color in ARGB format.
     */
    public function setAccentColor(int $accentColor): self
    {
        $this->accentColor = $accentColor;

        return $this;
    }

    /**
     * Get The background to be used in chats; may be null.
     */
    public function getBackground(): Background|null
    {
        return $this->background;
    }

    /**
     * Set The background to be used in chats; may be null.
     */
    public function setBackground(Background|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get The fill to be used as a background for outgoing messages.
     */
    public function getOutgoingMessageFill(): BackgroundFill|null
    {
        return $this->outgoingMessageFill;
    }

    /**
     * Set The fill to be used as a background for outgoing messages.
     */
    public function setOutgoingMessageFill(BackgroundFill|null $outgoingMessageFill): self
    {
        $this->outgoingMessageFill = $outgoingMessageFill;

        return $this;
    }

    /**
     * Get If true, the freeform gradient fill needs to be animated on every sent message.
     */
    public function getAnimateOutgoingMessageFill(): bool
    {
        return $this->animateOutgoingMessageFill;
    }

    /**
     * Set If true, the freeform gradient fill needs to be animated on every sent message.
     */
    public function setAnimateOutgoingMessageFill(bool $animateOutgoingMessageFill): self
    {
        $this->animateOutgoingMessageFill = $animateOutgoingMessageFill;

        return $this;
    }

    /**
     * Get Accent color of outgoing messages in ARGB format.
     */
    public function getOutgoingMessageAccentColor(): int
    {
        return $this->outgoingMessageAccentColor;
    }

    /**
     * Set Accent color of outgoing messages in ARGB format.
     */
    public function setOutgoingMessageAccentColor(int $outgoingMessageAccentColor): self
    {
        $this->outgoingMessageAccentColor = $outgoingMessageAccentColor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'themeSettings',
            'accent_color' => $this->getAccentColor(),
            'background' => $this->getBackground(),
            'outgoing_message_fill' => $this->getOutgoingMessageFill(),
            'animate_outgoing_message_fill' => $this->getAnimateOutgoingMessageFill(),
            'outgoing_message_accent_color' => $this->getOutgoingMessageAccentColor(),
        ];
    }
}
