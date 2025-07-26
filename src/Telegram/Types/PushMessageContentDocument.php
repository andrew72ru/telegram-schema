<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A document message (a general file) @document Message content; may be null @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentDocument extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('document')]
        private Document|null $document = null,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getDocument(): Document|null
    {
        return $this->document;
    }

    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentDocument',
            'document' => $this->getDocument(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
