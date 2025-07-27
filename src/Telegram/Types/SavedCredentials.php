<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about saved payment credentials @id Unique identifier of the saved credentials @title Title of the saved credentials.
 */
class SavedCredentials implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('id')]
        private string $id,
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedCredentials',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
        ];
    }
}
