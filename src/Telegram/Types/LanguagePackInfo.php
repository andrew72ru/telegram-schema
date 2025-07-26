<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a language pack
 */
class LanguagePackInfo implements \JsonSerializable
{
    public function __construct(
        /** Unique language pack identifier */
        #[SerializedName('id')]
        private string $id,
        /** Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it must be fetched from base language pack. Unsupported in custom language packs */
        #[SerializedName('base_language_pack_id')]
        private string $baseLanguagePackId,
        /** Language name */
        #[SerializedName('name')]
        private string $name,
        /** Name of the language in that language */
        #[SerializedName('native_name')]
        private string $nativeName,
        /** A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information */
        #[SerializedName('plural_code')]
        private string $pluralCode,
        /** True, if the language pack is official */
        #[SerializedName('is_official')]
        private bool $isOfficial,
        /** True, if the language pack strings are RTL */
        #[SerializedName('is_rtl')]
        private bool $isRtl,
        /** True, if the language pack is a beta language pack */
        #[SerializedName('is_beta')]
        private bool $isBeta,
        /** True, if the language pack is installed by the current user */
        #[SerializedName('is_installed')]
        private bool $isInstalled,
        /** Total number of non-deleted strings from the language pack */
        #[SerializedName('total_string_count')]
        private int $totalStringCount,
        /** Total number of translated strings from the language pack */
        #[SerializedName('translated_string_count')]
        private int $translatedStringCount,
        /** Total number of non-deleted strings from the language pack available locally */
        #[SerializedName('local_string_count')]
        private int $localStringCount,
        /** Link to language translation interface; empty for custom local language packs */
        #[SerializedName('translation_url')]
        private string $translationUrl,
    ) {
    }

    /**
     * Get Unique language pack identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique language pack identifier
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it must be fetched from base language pack. Unsupported in custom language packs
     */
    public function getBaseLanguagePackId(): string
    {
        return $this->baseLanguagePackId;
    }

    /**
     * Set Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it must be fetched from base language pack. Unsupported in custom language packs
     */
    public function setBaseLanguagePackId(string $baseLanguagePackId): self
    {
        $this->baseLanguagePackId = $baseLanguagePackId;

        return $this;
    }

    /**
     * Get Language name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Language name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Name of the language in that language
     */
    public function getNativeName(): string
    {
        return $this->nativeName;
    }

    /**
     * Set Name of the language in that language
     */
    public function setNativeName(string $nativeName): self
    {
        $this->nativeName = $nativeName;

        return $this;
    }

    /**
     * Get A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information
     */
    public function getPluralCode(): string
    {
        return $this->pluralCode;
    }

    /**
     * Set A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information
     */
    public function setPluralCode(string $pluralCode): self
    {
        $this->pluralCode = $pluralCode;

        return $this;
    }

    /**
     * Get True, if the language pack is official
     */
    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    /**
     * Set True, if the language pack is official
     */
    public function setIsOfficial(bool $isOfficial): self
    {
        $this->isOfficial = $isOfficial;

        return $this;
    }

    /**
     * Get True, if the language pack strings are RTL
     */
    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    /**
     * Set True, if the language pack strings are RTL
     */
    public function setIsRtl(bool $isRtl): self
    {
        $this->isRtl = $isRtl;

        return $this;
    }

    /**
     * Get True, if the language pack is a beta language pack
     */
    public function getIsBeta(): bool
    {
        return $this->isBeta;
    }

    /**
     * Set True, if the language pack is a beta language pack
     */
    public function setIsBeta(bool $isBeta): self
    {
        $this->isBeta = $isBeta;

        return $this;
    }

    /**
     * Get True, if the language pack is installed by the current user
     */
    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    /**
     * Set True, if the language pack is installed by the current user
     */
    public function setIsInstalled(bool $isInstalled): self
    {
        $this->isInstalled = $isInstalled;

        return $this;
    }

    /**
     * Get Total number of non-deleted strings from the language pack
     */
    public function getTotalStringCount(): int
    {
        return $this->totalStringCount;
    }

    /**
     * Set Total number of non-deleted strings from the language pack
     */
    public function setTotalStringCount(int $totalStringCount): self
    {
        $this->totalStringCount = $totalStringCount;

        return $this;
    }

    /**
     * Get Total number of translated strings from the language pack
     */
    public function getTranslatedStringCount(): int
    {
        return $this->translatedStringCount;
    }

    /**
     * Set Total number of translated strings from the language pack
     */
    public function setTranslatedStringCount(int $translatedStringCount): self
    {
        $this->translatedStringCount = $translatedStringCount;

        return $this;
    }

    /**
     * Get Total number of non-deleted strings from the language pack available locally
     */
    public function getLocalStringCount(): int
    {
        return $this->localStringCount;
    }

    /**
     * Set Total number of non-deleted strings from the language pack available locally
     */
    public function setLocalStringCount(int $localStringCount): self
    {
        $this->localStringCount = $localStringCount;

        return $this;
    }

    /**
     * Get Link to language translation interface; empty for custom local language packs
     */
    public function getTranslationUrl(): string
    {
        return $this->translationUrl;
    }

    /**
     * Set Link to language translation interface; empty for custom local language packs
     */
    public function setTranslationUrl(string $translationUrl): self
    {
        $this->translationUrl = $translationUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'languagePackInfo',
            'id' => $this->getId(),
            'base_language_pack_id' => $this->getBaseLanguagePackId(),
            'name' => $this->getName(),
            'native_name' => $this->getNativeName(),
            'plural_code' => $this->getPluralCode(),
            'is_official' => $this->getIsOfficial(),
            'is_rtl' => $this->getIsRtl(),
            'is_beta' => $this->getIsBeta(),
            'is_installed' => $this->getIsInstalled(),
            'total_string_count' => $this->getTotalStringCount(),
            'translated_string_count' => $this->getTranslatedStringCount(),
            'local_string_count' => $this->getLocalStringCount(),
            'translation_url' => $this->getTranslationUrl(),
        ];
    }
}
