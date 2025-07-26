<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Web App found by its short name
 */
class FoundWebApp implements \JsonSerializable
{
    public function __construct(
        /** The Web App */
        #[SerializedName('web_app')]
        private WebApp|null $webApp = null,
        /** True, if the user must be asked for the permission to the bot to send them messages */
        #[SerializedName('request_write_access')]
        private bool $requestWriteAccess,
        /** True, if there is no need to show an ordinary open URL confirmation before opening the Web App. The field must be ignored and confirmation must be shown anyway if the Web App link was hidden */
        #[SerializedName('skip_confirmation')]
        private bool $skipConfirmation,
    ) {
    }

    /**
     * Get The Web App
     */
    public function getWebApp(): WebApp|null
    {
        return $this->webApp;
    }

    /**
     * Set The Web App
     */
    public function setWebApp(WebApp|null $webApp): self
    {
        $this->webApp = $webApp;

        return $this;
    }

    /**
     * Get True, if the user must be asked for the permission to the bot to send them messages
     */
    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * Set True, if the user must be asked for the permission to the bot to send them messages
     */
    public function setRequestWriteAccess(bool $requestWriteAccess): self
    {
        $this->requestWriteAccess = $requestWriteAccess;

        return $this;
    }

    /**
     * Get True, if there is no need to show an ordinary open URL confirmation before opening the Web App. The field must be ignored and confirmation must be shown anyway if the Web App link was hidden
     */
    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    /**
     * Set True, if there is no need to show an ordinary open URL confirmation before opening the Web App. The field must be ignored and confirmation must be shown anyway if the Web App link was hidden
     */
    public function setSkipConfirmation(bool $skipConfirmation): self
    {
        $this->skipConfirmation = $skipConfirmation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundWebApp',
            'web_app' => $this->getWebApp(),
            'request_write_access' => $this->getRequestWriteAccess(),
            'skip_confirmation' => $this->getSkipConfirmation(),
        ];
    }
}
