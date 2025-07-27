<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a user @photo Photo of the user; may be null if none @is_bot True, if the user is a bot.
 */
class LinkPreviewTypeUser extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        #[SerializedName('is_bot')]
        private bool $isBot,
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

    public function getIsBot(): bool
    {
        return $this->isBot;
    }

    public function setIsBot(bool $isBot): self
    {
        $this->isBot = $isBot;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeUser',
            'photo' => $this->getPhoto(),
            'is_bot' => $this->getIsBot(),
        ];
    }
}
