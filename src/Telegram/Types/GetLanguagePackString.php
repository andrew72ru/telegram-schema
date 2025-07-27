<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a string stored in the local database from the specified localization target and language pack by its key. Returns a 404 error if the string is not found. Can be called synchronously.
 */
class GetLanguagePackString extends LanguagePackStringValue implements \JsonSerializable
{
    public function __construct(
        /** Path to the language pack database in which strings are stored */
        #[SerializedName('language_pack_database_path')]
        private string $languagePackDatabasePath,
        /** Localization target to which the language pack belongs */
        #[SerializedName('localization_target')]
        private string $localizationTarget,
        /** Language pack identifier */
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
        /** Language pack key of the string to be returned */
        #[SerializedName('key')]
        private string $key,
    ) {
    }

    /**
     * Get Path to the language pack database in which strings are stored.
     */
    public function getLanguagePackDatabasePath(): string
    {
        return $this->languagePackDatabasePath;
    }

    /**
     * Set Path to the language pack database in which strings are stored.
     */
    public function setLanguagePackDatabasePath(string $languagePackDatabasePath): self
    {
        $this->languagePackDatabasePath = $languagePackDatabasePath;

        return $this;
    }

    /**
     * Get Localization target to which the language pack belongs.
     */
    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    /**
     * Set Localization target to which the language pack belongs.
     */
    public function setLocalizationTarget(string $localizationTarget): self
    {
        $this->localizationTarget = $localizationTarget;

        return $this;
    }

    /**
     * Get Language pack identifier.
     */
    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    /**
     * Set Language pack identifier.
     */
    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    /**
     * Get Language pack key of the string to be returned.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Set Language pack key of the string to be returned.
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLanguagePackString',
            'language_pack_database_path' => $this->getLanguagePackDatabasePath(),
            'localization_target' => $this->getLocalizationTarget(),
            'language_pack_id' => $this->getLanguagePackId(),
            'key' => $this->getKey(),
        ];
    }
}
