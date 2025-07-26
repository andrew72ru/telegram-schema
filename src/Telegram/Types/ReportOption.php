<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option to report an entity to Telegram @id Unique identifier of the option @text Text of the option
 */
class ReportOption implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('id')]
        private string $id,
        #[SerializedName('text')]
        private string $text,
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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportOption',
            'id' => $this->getId(),
            'text' => $this->getText(),
        ];
    }
}
