<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a single button in a bot keyboard @text Text of the button @var Type of the button.
 */
class KeyboardButton implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('type')]
        private KeyboardButtonType|null $type = null,
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

    public function getType(): KeyboardButtonType|null
    {
        return $this->type;
    }

    public function setType(KeyboardButtonType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButton',
            'text' => $this->getText(),
            'type' => $this->getType(),
        ];
    }
}
