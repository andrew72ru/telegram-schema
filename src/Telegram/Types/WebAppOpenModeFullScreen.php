<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The Web App is opened in the full-screen mode.
 */
class WebAppOpenModeFullScreen extends WebAppOpenMode implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'webAppOpenModeFullScreen',
        ];
    }
}
