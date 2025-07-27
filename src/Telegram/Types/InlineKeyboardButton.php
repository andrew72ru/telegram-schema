<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a single button in an inline keyboard @text Text of the button @var Type of the button.
 */
class InlineKeyboardButton implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('type')]
        private InlineKeyboardButtonType|null $type = null,
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

    public function getType(): InlineKeyboardButtonType|null
    {
        return $this->type;
    }

    public function setType(InlineKeyboardButtonType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButton',
            'text' => $this->getText(),
            'type' => $this->getType(),
        ];
    }
}
