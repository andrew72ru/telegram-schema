<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a chat with a Telegram bot. Call searchPublicChat with the given bot username, check that the user is a bot, show START button in the chat with the bot,
 */
class InternalLinkTypeBotStart extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** The parameter to be passed to sendBotStartMessage */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** True, if sendBotStartMessage must be called automatically without showing the START button */
        #[SerializedName('autostart')]
        private bool $autostart,
    ) {
    }

    /**
     * Get Username of the bot
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * Set Username of the bot
     */
    public function setBotUsername(string $botUsername): self
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * Get The parameter to be passed to sendBotStartMessage
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set The parameter to be passed to sendBotStartMessage
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get True, if sendBotStartMessage must be called automatically without showing the START button
     */
    public function getAutostart(): bool
    {
        return $this->autostart;
    }

    /**
     * Set True, if sendBotStartMessage must be called automatically without showing the START button
     */
    public function setAutostart(bool $autostart): self
    {
        $this->autostart = $autostart;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBotStart',
            'bot_username' => $this->getBotUsername(),
            'start_parameter' => $this->getStartParameter(),
            'autostart' => $this->getAutostart(),
        ];
    }
}
