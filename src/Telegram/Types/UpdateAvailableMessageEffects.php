<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of available message effects has changed.
 */
class UpdateAvailableMessageEffects extends Update implements \JsonSerializable
{
    public function __construct(
        /** The new list of available message effects from emoji reactions */
        #[SerializedName('reaction_effect_ids')]
        private array|null $reactionEffectIds = null,
        /** The new list of available message effects from Premium stickers */
        #[SerializedName('sticker_effect_ids')]
        private array|null $stickerEffectIds = null,
    ) {
    }

    /**
     * Get The new list of available message effects from emoji reactions.
     */
    public function getReactionEffectIds(): array|null
    {
        return $this->reactionEffectIds;
    }

    /**
     * Set The new list of available message effects from emoji reactions.
     */
    public function setReactionEffectIds(array|null $reactionEffectIds): self
    {
        $this->reactionEffectIds = $reactionEffectIds;

        return $this;
    }

    /**
     * Get The new list of available message effects from Premium stickers.
     */
    public function getStickerEffectIds(): array|null
    {
        return $this->stickerEffectIds;
    }

    /**
     * Set The new list of available message effects from Premium stickers.
     */
    public function setStickerEffectIds(array|null $stickerEffectIds): self
    {
        $this->stickerEffectIds = $stickerEffectIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAvailableMessageEffects',
            'reaction_effect_ids' => $this->getReactionEffectIds(),
            'sticker_effect_ids' => $this->getStickerEffectIds(),
        ];
    }
}
