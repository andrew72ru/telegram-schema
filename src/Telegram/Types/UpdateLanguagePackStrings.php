<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some language pack strings have been updated @localization_target Localization target to which the language pack belongs @language_pack_id Identifier of the updated language pack @strings List of changed language pack strings; empty if all strings have changed
 */
class UpdateLanguagePackStrings extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('localization_target')]
        private string $localizationTarget,
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
        #[SerializedName('strings')]
        private array|null $strings = null,
    ) {
    }

    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    public function setLocalizationTarget(string $localizationTarget): self
    {
        $this->localizationTarget = $localizationTarget;

        return $this;
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
            '@type' => 'updateLanguagePackStrings',
            'localization_target' => $this->getLocalizationTarget(),
            'language_pack_id' => $this->getLanguagePackId(),
            'strings' => $this->getStrings(),
        ];
    }
}
