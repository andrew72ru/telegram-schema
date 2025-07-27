<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS URL of a Web App to open after a link of the type internalLinkTypeWebApp is clicked.
 */
class GetWebAppLinkUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which the link was clicked; pass 0 if none */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Short name of the Web App */
        #[SerializedName('web_app_short_name')]
        private string $webAppShortName,
        /** Start parameter from internalLinkTypeWebApp */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** Pass true if the current user allowed the bot to send them messages */
        #[SerializedName('allow_write_access')]
        private bool $allowWriteAccess,
        /** Parameters to use to open the Web App */
        #[SerializedName('parameters')]
        private WebAppOpenParameters|null $parameters = null,
    ) {
    }

    /**
     * Get Identifier of the chat in which the link was clicked; pass 0 if none.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which the link was clicked; pass 0 if none.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the target bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Short name of the Web App.
     */
    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }

    /**
     * Set Short name of the Web App.
     */
    public function setWebAppShortName(string $webAppShortName): self
    {
        $this->webAppShortName = $webAppShortName;

        return $this;
    }

    /**
     * Get Start parameter from internalLinkTypeWebApp.
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Start parameter from internalLinkTypeWebApp.
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get Pass true if the current user allowed the bot to send them messages.
     */
    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    /**
     * Set Pass true if the current user allowed the bot to send them messages.
     */
    public function setAllowWriteAccess(bool $allowWriteAccess): self
    {
        $this->allowWriteAccess = $allowWriteAccess;

        return $this;
    }

    /**
     * Get Parameters to use to open the Web App.
     */
    public function getParameters(): WebAppOpenParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters to use to open the Web App.
     */
    public function setParameters(WebAppOpenParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getWebAppLinkUrl',
            'chat_id' => $this->getChatId(),
            'bot_user_id' => $this->getBotUserId(),
            'web_app_short_name' => $this->getWebAppShortName(),
            'start_parameter' => $this->getStartParameter(),
            'allow_write_access' => $this->getAllowWriteAccess(),
            'parameters' => $this->getParameters(),
        ];
    }
}
