<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to boost a supergroup chat @photo Photo of the chat; may be null.
 */
class LinkPreviewTypeSupergroupBoost extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
    ) {
    }

    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeSupergroupBoost',
            'photo' => $this->getPhoto(),
        ];
    }
}
