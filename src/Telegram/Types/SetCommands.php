<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the list of commands supported by the bot for the given user scope and language; for bots only
 */
class SetCommands extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The scope to which the commands are relevant; pass null to change commands in the default bot command scope */
        #[SerializedName('scope')]
        private BotCommandScope|null $scope = null,
        /** A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no dedicated commands */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** List of the bot's commands */
        #[SerializedName('commands')]
        private array|null $commands = null,
    ) {
    }

    /**
     * Get The scope to which the commands are relevant; pass null to change commands in the default bot command scope
     */
    public function getScope(): BotCommandScope|null
    {
        return $this->scope;
    }

    /**
     * Set The scope to which the commands are relevant; pass null to change commands in the default bot command scope
     */
    public function setScope(BotCommandScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no dedicated commands
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code. If empty, the commands will be applied to all users from the given scope, for which language there are no dedicated commands
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get List of the bot's commands
     */
    public function getCommands(): array|null
    {
        return $this->commands;
    }

    /**
     * Set List of the bot's commands
     */
    public function setCommands(array|null $commands): self
    {
        $this->commands = $commands;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setCommands',
            'scope' => $this->getScope(),
            'language_code' => $this->getLanguageCode(),
            'commands' => $this->getCommands(),
        ];
    }
}
