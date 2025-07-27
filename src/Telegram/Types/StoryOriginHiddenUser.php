<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The original story was posted by an unknown user @poster_name Name of the user or the chat that posted the story.
 */
class StoryOriginHiddenUser extends StoryOrigin implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('poster_name')]
        private string $posterName,
    ) {
    }

    public function getPosterName(): string
    {
        return $this->posterName;
    }

    public function setPosterName(string $posterName): self
    {
        $this->posterName = $posterName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyOriginHiddenUser',
            'poster_name' => $this->getPosterName(),
        ];
    }
}
