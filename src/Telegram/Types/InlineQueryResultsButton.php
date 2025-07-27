<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a button to be shown above inline query results @text The text of the button @var Type of the button.
 */
class InlineQueryResultsButton implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('type')]
        private InlineQueryResultsButtonType|null $type = null,
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

    public function getType(): InlineQueryResultsButtonType|null
    {
        return $this->type;
    }

    public function setType(InlineQueryResultsButtonType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultsButton',
            'text' => $this->getText(),
            'type' => $this->getType(),
        ];
    }
}
