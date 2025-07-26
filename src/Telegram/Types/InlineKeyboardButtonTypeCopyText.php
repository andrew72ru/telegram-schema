<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that copies specified text to clipboard @text The text to copy to clipboard
 */
class InlineKeyboardButtonTypeCopyText extends InlineKeyboardButtonType implements \JsonSerializable
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
            '@type' => 'inlineKeyboardButtonTypeCopyText',
            'text' => $this->getText(),
        ];
    }
}
