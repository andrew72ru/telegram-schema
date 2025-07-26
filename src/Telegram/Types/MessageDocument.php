<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A document message (general file) @document The document description @caption Document caption
 */
class MessageDocument extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('document')]
        private Document|null $document = null,
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
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

    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageDocument',
            'document' => $this->getDocument(),
            'caption' => $this->getCaption(),
        ];
    }
}
