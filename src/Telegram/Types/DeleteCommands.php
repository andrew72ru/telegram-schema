<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes commands supported by the bot for the given user scope and language; for bots only
 */
class DeleteCommands extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The scope to which the commands are relevant; pass null to delete commands in the default bot command scope */
        #[SerializedName('scope')]
        private BotCommandScope|null $scope = null,
        /** A two-letter ISO 639-1 language code or an empty string */
        #[SerializedName('language_code')]
        private string $languageCode,
    ) {
    }

    /**
     * Get The scope to which the commands are relevant; pass null to delete commands in the default bot command scope
     */
    public function getScope(): BotCommandScope|null
    {
        return $this->scope;
    }

    /**
     * Set The scope to which the commands are relevant; pass null to delete commands in the default bot command scope
     */
    public function setScope(BotCommandScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code or an empty string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code or an empty string
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteCommands',
            'scope' => $this->getScope(),
            'language_code' => $this->getLanguageCode(),
        ];
    }
}
