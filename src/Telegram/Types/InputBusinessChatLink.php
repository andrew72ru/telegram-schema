<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a business chat link to create or edit.
 */
class InputBusinessChatLink implements \JsonSerializable
{
    public function __construct(
        /** Message draft text that will be added to the input field */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Link title */
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    /**
     * Get Message draft text that will be added to the input field.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message draft text that will be added to the input field.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Link title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Link title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputBusinessChatLink',
            'text' => $this->getText(),
            'title' => $this->getTitle(),
        ];
    }
}
