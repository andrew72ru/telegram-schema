<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a Telegram bot, which is expected to be added to a group chat. Call searchPublicChat with the given bot username, check that the user is a bot and can be added to groups,
 */
class InternalLinkTypeBotStartInGroup extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** The parameter to be passed to sendBotStartMessage */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** Expected administrator rights for the bot; may be null */
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
     * Get Expected administrator rights for the bot; may be null
     */
    public function getAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->administratorRights;
    }

    /**
     * Set Expected administrator rights for the bot; may be null
     */
    public function setAdministratorRights(ChatAdministratorRights|null $administratorRights): self
    {
        $this->administratorRights = $administratorRights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBotStartInGroup',
            'bot_username' => $this->getBotUsername(),
            'start_parameter' => $this->getStartParameter(),
            'administrator_rights' => $this->getAdministratorRights(),
        ];
    }
}
