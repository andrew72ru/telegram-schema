<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An effect from an emoji reaction @select_animation Select animation for the effect in TGS format @effect_animation Effect animation for the effect in TGS format
 */
class MessageEffectTypeEmojiReaction extends MessageEffectType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('select_animation')]
        private Sticker|null $selectAnimation = null,
        #[SerializedName('effect_animation')]
        private Sticker|null $effectAnimation = null,
    ) {
    }

    public function getSelectAnimation(): Sticker|null
    {
        return $this->selectAnimation;
    }

    public function setSelectAnimation(Sticker|null $selectAnimation): self
    {
        $this->selectAnimation = $selectAnimation;

        return $this;
    }

    public function getEffectAnimation(): Sticker|null
    {
        return $this->effectAnimation;
    }

    public function setEffectAnimation(Sticker|null $effectAnimation): self
    {
        $this->effectAnimation = $effectAnimation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageEffectTypeEmojiReaction',
            'select_animation' => $this->getSelectAnimation(),
            'effect_animation' => $this->getEffectAnimation(),
        ];
    }
}
