<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A preformatted text paragraph @text Paragraph text @language Programming language for which the text needs to be formatted
 */
class PageBlockPreformatted extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('language')]
        private string $language,
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

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockPreformatted',
            'text' => $this->getText(),
            'language' => $this->getLanguage(),
        ];
    }
}
