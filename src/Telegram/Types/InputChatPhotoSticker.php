<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A sticker on a custom background @sticker Information about the sticker
 */
class InputChatPhotoSticker extends InputChatPhoto implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker')]
        private ChatPhotoSticker|null $sticker = null,
    ) {
    }

    public function getSticker(): ChatPhotoSticker|null
    {
        return $this->sticker;
    }

    public function setSticker(ChatPhotoSticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChatPhotoSticker',
            'sticker' => $this->getSticker(),
        ];
    }
}
