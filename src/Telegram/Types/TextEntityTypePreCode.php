<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Text that must be formatted as if inside pre, and code HTML tags @language Programming language of the code; as defined by the sender
 */
class TextEntityTypePreCode extends TextEntityType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('language')]
        private string $language,
    ) {
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
            '@type' => 'textEntityTypePreCode',
            'language' => $this->getLanguage(),
        ];
    }
}
