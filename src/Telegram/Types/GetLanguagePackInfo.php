<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a language pack. Returned language pack identifier may be different from a provided one. Can be called before authorization @language_pack_id Language pack identifier
 */
class GetLanguagePackInfo extends LanguagePackInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
    ) {
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLanguagePackInfo',
            'language_pack_id' => $this->getLanguagePackId(),
        ];
    }
}
