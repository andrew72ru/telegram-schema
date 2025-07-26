<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an emoji reaction
 */
class EmojiReaction implements \JsonSerializable
{
    public function __construct(
        /** Text representation of the reaction */
        #[SerializedName('emoji')]
        private string $emoji,
        /** Reaction title */
        #[SerializedName('title')]
        private string $title,
        /** True, if the reaction can be added to new messages and enabled in chats */
        #[SerializedName('is_active')]
        private bool $isActive,
        /** Static icon for the reaction */
        #[SerializedName('static_icon')]
        private Sticker|null $staticIcon = null,
        /** Appear animation for the reaction */
        #[SerializedName('appear_animation')]
        private Sticker|null $appearAnimation = null,
        /** Select animation for the reaction */
        #[SerializedName('select_animation')]
        private Sticker|null $selectAnimation = null,
        /** Activate animation for the reaction */
        #[SerializedName('activate_animation')]
        private Sticker|null $activateAnimation = null,
        /** Effect animation for the reaction */
        #[SerializedName('effect_animation')]
        private Sticker|null $effectAnimation = null,
        /** Around animation for the reaction; may be null */
        #[SerializedName('around_animation')]
        private Sticker|null $aroundAnimation = null,
        /** Center animation for the reaction; may be null */
        #[SerializedName('center_animation')]
        private Sticker|null $centerAnimation = null,
    ) {
    }

    /**
     * Get Text representation of the reaction
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Text representation of the reaction
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get Reaction title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Reaction title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get True, if the reaction can be added to new messages and enabled in chats
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set True, if the reaction can be added to new messages and enabled in chats
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get Static icon for the reaction
     */
    public function getStaticIcon(): Sticker|null
    {
        return $this->staticIcon;
    }

    /**
     * Set Static icon for the reaction
     */
    public function setStaticIcon(Sticker|null $staticIcon): self
    {
        $this->staticIcon = $staticIcon;

        return $this;
    }

    /**
     * Get Appear animation for the reaction
     */
    public function getAppearAnimation(): Sticker|null
    {
        return $this->appearAnimation;
    }

    /**
     * Set Appear animation for the reaction
     */
    public function setAppearAnimation(Sticker|null $appearAnimation): self
    {
        $this->appearAnimation = $appearAnimation;

        return $this;
    }

    /**
     * Get Select animation for the reaction
     */
    public function getSelectAnimation(): Sticker|null
    {
        return $this->selectAnimation;
    }

    /**
     * Set Select animation for the reaction
     */
    public function setSelectAnimation(Sticker|null $selectAnimation): self
    {
        $this->selectAnimation = $selectAnimation;

        return $this;
    }

    /**
     * Get Activate animation for the reaction
     */
    public function getActivateAnimation(): Sticker|null
    {
        return $this->activateAnimation;
    }

    /**
     * Set Activate animation for the reaction
     */
    public function setActivateAnimation(Sticker|null $activateAnimation): self
    {
        $this->activateAnimation = $activateAnimation;

        return $this;
    }

    /**
     * Get Effect animation for the reaction
     */
    public function getEffectAnimation(): Sticker|null
    {
        return $this->effectAnimation;
    }

    /**
     * Set Effect animation for the reaction
     */
    public function setEffectAnimation(Sticker|null $effectAnimation): self
    {
        $this->effectAnimation = $effectAnimation;

        return $this;
    }

    /**
     * Get Around animation for the reaction; may be null
     */
    public function getAroundAnimation(): Sticker|null
    {
        return $this->aroundAnimation;
    }

    /**
     * Set Around animation for the reaction; may be null
     */
    public function setAroundAnimation(Sticker|null $aroundAnimation): self
    {
        $this->aroundAnimation = $aroundAnimation;

        return $this;
    }

    /**
     * Get Center animation for the reaction; may be null
     */
    public function getCenterAnimation(): Sticker|null
    {
        return $this->centerAnimation;
    }

    /**
     * Set Center animation for the reaction; may be null
     */
    public function setCenterAnimation(Sticker|null $centerAnimation): self
    {
        $this->centerAnimation = $centerAnimation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiReaction',
            'emoji' => $this->getEmoji(),
            'title' => $this->getTitle(),
            'is_active' => $this->getIsActive(),
            'static_icon' => $this->getStaticIcon(),
            'appear_animation' => $this->getAppearAnimation(),
            'select_animation' => $this->getSelectAnimation(),
            'activate_animation' => $this->getActivateAnimation(),
            'effect_animation' => $this->getEffectAnimation(),
            'around_animation' => $this->getAroundAnimation(),
            'center_animation' => $this->getCenterAnimation(),
        ];
    }
}
