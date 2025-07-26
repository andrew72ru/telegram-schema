<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Animated stickers to be combined into a slot machine
 */
class DiceStickersSlotMachine extends DiceStickers implements \JsonSerializable
{
    public function __construct(
        /** The animated sticker with the slot machine background. The background animation must start playing after all reel animations finish */
        #[SerializedName('background')]
        private Sticker|null $background = null,
        /** The animated sticker with the lever animation. The lever animation must play once in the initial dice state */
        #[SerializedName('lever')]
        private Sticker|null $lever = null,
        /** The animated sticker with the left reel */
        #[SerializedName('left_reel')]
        private Sticker|null $leftReel = null,
        /** The animated sticker with the center reel */
        #[SerializedName('center_reel')]
        private Sticker|null $centerReel = null,
        /** The animated sticker with the right reel */
        #[SerializedName('right_reel')]
        private Sticker|null $rightReel = null,
    ) {
    }

    /**
     * Get The animated sticker with the slot machine background. The background animation must start playing after all reel animations finish
     */
    public function getBackground(): Sticker|null
    {
        return $this->background;
    }

    /**
     * Set The animated sticker with the slot machine background. The background animation must start playing after all reel animations finish
     */
    public function setBackground(Sticker|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get The animated sticker with the lever animation. The lever animation must play once in the initial dice state
     */
    public function getLever(): Sticker|null
    {
        return $this->lever;
    }

    /**
     * Set The animated sticker with the lever animation. The lever animation must play once in the initial dice state
     */
    public function setLever(Sticker|null $lever): self
    {
        $this->lever = $lever;

        return $this;
    }

    /**
     * Get The animated sticker with the left reel
     */
    public function getLeftReel(): Sticker|null
    {
        return $this->leftReel;
    }

    /**
     * Set The animated sticker with the left reel
     */
    public function setLeftReel(Sticker|null $leftReel): self
    {
        $this->leftReel = $leftReel;

        return $this;
    }

    /**
     * Get The animated sticker with the center reel
     */
    public function getCenterReel(): Sticker|null
    {
        return $this->centerReel;
    }

    /**
     * Set The animated sticker with the center reel
     */
    public function setCenterReel(Sticker|null $centerReel): self
    {
        $this->centerReel = $centerReel;

        return $this;
    }

    /**
     * Get The animated sticker with the right reel
     */
    public function getRightReel(): Sticker|null
    {
        return $this->rightReel;
    }

    /**
     * Set The animated sticker with the right reel
     */
    public function setRightReel(Sticker|null $rightReel): self
    {
        $this->rightReel = $rightReel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'diceStickersSlotMachine',
            'background' => $this->getBackground(),
            'lever' => $this->getLever(),
            'left_reel' => $this->getLeftReel(),
            'center_reel' => $this->getCenterReel(),
            'right_reel' => $this->getRightReel(),
        ];
    }
}
