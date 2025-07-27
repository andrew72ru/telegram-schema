<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user launched a Web App using getWebAppLinkUrl @web_app Information about the Web App.
 */
class BotWriteAccessAllowReasonLaunchedWebApp extends BotWriteAccessAllowReason implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('web_app')]
        private WebApp|null $webApp = null,
    ) {
    }

    public function getWebApp(): WebApp|null
    {
        return $this->webApp;
    }

    public function setWebApp(WebApp|null $webApp): self
    {
        $this->webApp = $webApp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botWriteAccessAllowReasonLaunchedWebApp',
            'web_app' => $this->getWebApp(),
        ];
    }
}
