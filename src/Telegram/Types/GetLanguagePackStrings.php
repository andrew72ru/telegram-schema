<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns strings from a language pack in the current localization target by their keys. Can be called before authorization.
 */
class GetLanguagePackStrings extends LanguagePackStrings implements \JsonSerializable
{
    public function __construct(
        /** Language pack identifier of the strings to be returned */
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
        /** Language pack keys of the strings to be returned; leave empty to request all available strings */
        #[SerializedName('keys')]
        private array|null $keys = null,
    ) {
    }

    /**
     * Get Language pack identifier of the strings to be returned.
     */
    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    /**
     * Set Language pack identifier of the strings to be returned.
     */
    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    /**
     * Get Language pack keys of the strings to be returned; leave empty to request all available strings.
     */
    public function getKeys(): array|null
    {
        return $this->keys;
    }

    /**
     * Set Language pack keys of the strings to be returned; leave empty to request all available strings.
     */
    public function setKeys(array|null $keys): self
    {
        $this->keys = $keys;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLanguagePackStrings',
            'language_pack_id' => $this->getLanguagePackId(),
            'keys' => $this->getKeys(),
        ];
    }
}
