<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns all entities (mentions, hashtags, cashtags, bot commands, bank card numbers, URLs, and email addresses) found in the text. Can be called synchronously @text The text in which to look for entities
 */
class GetTextEntities extends TextEntities implements \JsonSerializable
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
            '@type' => 'getTextEntities',
            'text' => $this->getText(),
        ];
    }
}
