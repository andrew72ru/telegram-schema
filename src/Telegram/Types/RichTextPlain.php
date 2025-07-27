<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A plain text @text Text.
 */
class RichTextPlain extends RichText implements \JsonSerializable
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
            '@type' => 'richTextPlain',
            'text' => $this->getText(),
        ];
    }
}
