<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Replaces text entities with Markdown formatting in a human-friendly format. Entities that can't be represented in Markdown unambiguously are kept as is. Can be called synchronously @text The text
 */
class GetMarkdownText extends FormattedText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMarkdownText',
            'text' => $this->getText(),
        ];
    }
}
