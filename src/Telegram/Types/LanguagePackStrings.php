<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of language pack strings @strings A list of language pack strings
 */
class LanguagePackStrings implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('strings')]
        private array|null $strings = null,
    ) {
    }

    public function getStrings(): array|null
    {
        return $this->strings;
    }

    public function setStrings(array|null $strings): self
    {
        $this->strings = $strings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'languagePackStrings',
            'strings' => $this->getStrings(),
        ];
    }
}
