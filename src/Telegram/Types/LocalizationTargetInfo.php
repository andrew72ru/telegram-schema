<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the current localization target @language_packs List of available language packs for this application.
 */
class LocalizationTargetInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('language_packs')]
        private array|null $languagePacks = null,
    ) {
    }

    public function getLanguagePacks(): array|null
    {
        return $this->languagePacks;
    }

    public function setLanguagePacks(array|null $languagePacks): self
    {
        $this->languagePacks = $languagePacks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'localizationTargetInfo',
            'language_packs' => $this->getLanguagePacks(),
        ];
    }
}
