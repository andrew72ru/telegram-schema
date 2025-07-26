<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes media previews of a bot
 */
class BotMediaPreview implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the preview was added or changed last time */
        #[SerializedName('date')]
        private int $date,
        /** Content of the preview */
        #[SerializedName('content')]
        private StoryContent|null $content = null,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the preview was added or changed last time
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the preview was added or changed last time
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Content of the preview
     */
    public function getContent(): StoryContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the preview
     */
    public function setContent(StoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botMediaPreview',
            'date' => $this->getDate(),
            'content' => $this->getContent(),
        ];
    }
}
