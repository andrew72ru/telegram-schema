<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was screenshotted; the source must be used only if the message content was visible during the screenshot
 */
class MessageSourceScreenshot extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceScreenshot',
        ];
    }
}
