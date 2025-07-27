<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the bio of the current user @bio The new value of the user bio; 0-getOption("bio_length_max") characters without line feeds.
 */
class SetBio extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bio')]
        private string $bio,
    ) {
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBio',
            'bio' => $this->getBio(),
        ];
    }
}
