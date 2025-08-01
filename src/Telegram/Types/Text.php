<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains some text @text Text.
 */
class Text implements \JsonSerializable
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
            '@type' => 'text',
            'text' => $this->getText(),
        ];
    }
}
