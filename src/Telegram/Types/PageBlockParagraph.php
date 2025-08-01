<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text paragraph @text Paragraph text.
 */
class PageBlockParagraph extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
    ) {
    }

    public function getText(): RichText|null
    {
        return $this->text;
    }

    public function setText(RichText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockParagraph',
            'text' => $this->getText(),
        ];
    }
}
