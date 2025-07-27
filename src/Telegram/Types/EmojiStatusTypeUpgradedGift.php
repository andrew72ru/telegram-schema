<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An upgraded gift set as emoji status.
 */
class EmojiStatusTypeUpgradedGift extends EmojiStatusType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the upgraded gift */
        #[SerializedName('upgraded_gift_id')]
        private int $upgradedGiftId,
        /** The title of the upgraded gift */
        #[SerializedName('gift_title')]
        private string $giftTitle,
        /** Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift */
        #[SerializedName('gift_name')]
        private string $giftName,
        /** Custom emoji identifier of the model of the upgraded gift */
        #[SerializedName('model_custom_emoji_id')]
        private int $modelCustomEmojiId,
        /** Custom emoji identifier of the symbol of the upgraded gift */
        #[SerializedName('symbol_custom_emoji_id')]
        private int $symbolCustomEmojiId,
        /** Colors of the backdrop of the upgraded gift */
        #[SerializedName('backdrop_colors')]
        private UpgradedGiftBackdropColors|null $backdropColors = null,
    ) {
    }

    /**
     * Get Identifier of the upgraded gift.
     */
    public function getUpgradedGiftId(): int
    {
        return $this->upgradedGiftId;
    }

    /**
     * Set Identifier of the upgraded gift.
     */
    public function setUpgradedGiftId(int $upgradedGiftId): self
    {
        $this->upgradedGiftId = $upgradedGiftId;

        return $this;
    }

    /**
     * Get The title of the upgraded gift.
     */
    public function getGiftTitle(): string
    {
        return $this->giftTitle;
    }

    /**
     * Set The title of the upgraded gift.
     */
    public function setGiftTitle(string $giftTitle): self
    {
        $this->giftTitle = $giftTitle;

        return $this;
    }

    /**
     * Get Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift.
     */
    public function getGiftName(): string
    {
        return $this->giftName;
    }

    /**
     * Set Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift.
     */
    public function setGiftName(string $giftName): self
    {
        $this->giftName = $giftName;

        return $this;
    }

    /**
     * Get Custom emoji identifier of the model of the upgraded gift.
     */
    public function getModelCustomEmojiId(): int
    {
        return $this->modelCustomEmojiId;
    }

    /**
     * Set Custom emoji identifier of the model of the upgraded gift.
     */
    public function setModelCustomEmojiId(int $modelCustomEmojiId): self
    {
        $this->modelCustomEmojiId = $modelCustomEmojiId;

        return $this;
    }

    /**
     * Get Custom emoji identifier of the symbol of the upgraded gift.
     */
    public function getSymbolCustomEmojiId(): int
    {
        return $this->symbolCustomEmojiId;
    }

    /**
     * Set Custom emoji identifier of the symbol of the upgraded gift.
     */
    public function setSymbolCustomEmojiId(int $symbolCustomEmojiId): self
    {
        $this->symbolCustomEmojiId = $symbolCustomEmojiId;

        return $this;
    }

    /**
     * Get Colors of the backdrop of the upgraded gift.
     */
    public function getBackdropColors(): UpgradedGiftBackdropColors|null
    {
        return $this->backdropColors;
    }

    /**
     * Set Colors of the backdrop of the upgraded gift.
     */
    public function setBackdropColors(UpgradedGiftBackdropColors|null $backdropColors): self
    {
        $this->backdropColors = $backdropColors;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiStatusTypeUpgradedGift',
            'upgraded_gift_id' => $this->getUpgradedGiftId(),
            'gift_title' => $this->getGiftTitle(),
            'gift_name' => $this->getGiftName(),
            'model_custom_emoji_id' => $this->getModelCustomEmojiId(),
            'symbol_custom_emoji_id' => $this->getSymbolCustomEmojiId(),
            'backdrop_colors' => $this->getBackdropColors(),
        ];
    }
}
