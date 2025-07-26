<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that a previously opened Web App was closed @web_app_launch_id Identifier of Web App launch, received from openWebApp
 */
class CloseWebApp extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('web_app_launch_id')]
        private int $webAppLaunchId,
    ) {
    }

    public function getWebAppLaunchId(): int
    {
        return $this->webAppLaunchId;
    }

    public function setWebAppLaunchId(int $webAppLaunchId): self
    {
        $this->webAppLaunchId = $webAppLaunchId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'closeWebApp',
            'web_app_launch_id' => $this->getWebAppLaunchId(),
        ];
    }
}
