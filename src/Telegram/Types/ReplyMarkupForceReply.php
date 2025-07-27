<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Instructs application to force a reply to this message.
 */
class ReplyMarkupForceReply extends ReplyMarkup implements \JsonSerializable
{
    public function __construct(
        /** True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply */
        #[SerializedName('is_personal')]
        private bool $isPersonal,
        /** If non-empty, the placeholder to be shown in the input field when the reply is active; 0-64 characters */
        #[SerializedName('input_field_placeholder')]
        private string $inputFieldPlaceholder,
    ) {
    }

    /**
     * Get True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply.
     */
    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    /**
     * Set True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply.
     */
    public function setIsPersonal(bool $isPersonal): self
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    /**
     * Get If non-empty, the placeholder to be shown in the input field when the reply is active; 0-64 characters.
     */
    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }

    /**
     * Set If non-empty, the placeholder to be shown in the input field when the reply is active; 0-64 characters.
     */
    public function setInputFieldPlaceholder(string $inputFieldPlaceholder): self
    {
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replyMarkupForceReply',
            'is_personal' => $this->getIsPersonal(),
            'input_field_placeholder' => $this->getInputFieldPlaceholder(),
        ];
    }
}
