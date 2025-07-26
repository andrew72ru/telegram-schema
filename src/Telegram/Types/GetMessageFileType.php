<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a file with messages exported from another application @message_file_head Beginning of the message file; up to 100 first lines
 */
class GetMessageFileType extends MessageFileType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_file_head')]
        private string $messageFileHead,
    ) {
    }

    public function getMessageFileHead(): string
    {
        return $this->messageFileHead;
    }

    public function setMessageFileHead(string $messageFileHead): self
    {
        $this->messageFileHead = $messageFileHead;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageFileType',
            'message_file_head' => $this->getMessageFileHead(),
        ];
    }
}
