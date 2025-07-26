<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A non-standard action has happened in the chat @text Message text to be shown in the chat
 */
class MessageCustomServiceAction extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageCustomServiceAction',
            'text' => $this->getText(),
        ];
    }
}
