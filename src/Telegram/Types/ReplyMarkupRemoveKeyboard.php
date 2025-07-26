<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Instructs application to remove the keyboard once this message has been received. This kind of keyboard can't be received in an incoming message; instead, updateChatReplyMarkup with message_id == 0 will be sent
 */
class ReplyMarkupRemoveKeyboard extends ReplyMarkup implements \JsonSerializable
{
    public function __construct(
        /** True, if the keyboard is removed only for the mentioned users or the target user of a reply */
        #[SerializedName('is_personal')]
        private bool $isPersonal,
    ) {
    }

    /**
     * Get True, if the keyboard is removed only for the mentioned users or the target user of a reply
     */
    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    /**
     * Set True, if the keyboard is removed only for the mentioned users or the target user of a reply
     */
    public function setIsPersonal(bool $isPersonal): self
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replyMarkupRemoveKeyboard',
            'is_personal' => $this->getIsPersonal(),
        ];
    }
}
