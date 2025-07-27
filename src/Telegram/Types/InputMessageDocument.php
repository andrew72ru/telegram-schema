<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A document message (general file).
 */
class InputMessageDocument extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Document to be sent */
        #[SerializedName('document')]
        private InputFile|null $document = null,
        /** Document thumbnail; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** Pass true to disable automatic file type detection and send the document as a file. Always true for files sent to secret chats */
        #[SerializedName('disable_content_type_detection')]
        private bool $disableContentTypeDetection,
        /** Document caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
    ) {
    }

    /**
     * Get Document to be sent.
     */
    public function getDocument(): InputFile|null
    {
        return $this->document;
    }

    /**
     * Set Document to be sent.
     */
    public function setDocument(InputFile|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get Document thumbnail; pass null to skip thumbnail uploading.
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Document thumbnail; pass null to skip thumbnail uploading.
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Pass true to disable automatic file type detection and send the document as a file. Always true for files sent to secret chats.
     */
    public function getDisableContentTypeDetection(): bool
    {
        return $this->disableContentTypeDetection;
    }

    /**
     * Set Pass true to disable automatic file type detection and send the document as a file. Always true for files sent to secret chats.
     */
    public function setDisableContentTypeDetection(bool $disableContentTypeDetection): self
    {
        $this->disableContentTypeDetection = $disableContentTypeDetection;

        return $this;
    }

    /**
     * Get Document caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Document caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageDocument',
            'document' => $this->getDocument(),
            'thumbnail' => $this->getThumbnail(),
            'disable_content_type_detection' => $this->getDisableContentTypeDetection(),
            'caption' => $this->getCaption(),
        ];
    }
}
