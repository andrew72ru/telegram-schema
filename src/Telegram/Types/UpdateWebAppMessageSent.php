<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message was sent by an opened Web App, so the Web App needs to be closed @web_app_launch_id Identifier of Web App launch
 */
class UpdateWebAppMessageSent extends Update implements \JsonSerializable
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
            '@type' => 'updateWebAppMessageSent',
            'web_app_launch_id' => $this->getWebAppLaunchId(),
        ];
    }
}
