<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a Telegram bot, which is expected to be added to a channel chat as an administrator. Call searchPublicChat with the given bot username and check that the user is a bot,
 */
class InternalLinkTypeBotAddToChannel extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** Expected administrator rights for the bot */
        #[SerializedName('administrator_rights')]
        private ChatAdministratorRights|null $administratorRights = null,
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
     * Get Expected administrator rights for the bot
     */
    public function getAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->administratorRights;
    }

    /**
     * Set Expected administrator rights for the bot
     */
    public function setAdministratorRights(ChatAdministratorRights|null $administratorRights): self
    {
        $this->administratorRights = $administratorRights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBotAddToChannel',
            'bot_username' => $this->getBotUsername(),
            'administrator_rights' => $this->getAdministratorRights(),
        ];
    }
}
