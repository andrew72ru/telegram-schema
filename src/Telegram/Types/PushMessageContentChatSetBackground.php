<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat background was edited @is_same True, if the set background is the same as the background of the current user.
 */
class PushMessageContentChatSetBackground extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_same')]
        private bool $isSame,
    ) {
    }

    public function getIsSame(): bool
    {
        return $this->isSame;
    }

    public function setIsSame(bool $isSame): self
    {
        $this->isSame = $isSame;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatSetBackground',
            'is_same' => $this->getIsSame(),
        ];
    }
}
