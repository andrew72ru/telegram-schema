<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains custom information about the user @message Information message @author Information author @date Information change date.
 */
class UserSupportInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private FormattedText|null $message = null,
        #[SerializedName('author')]
        private string $author,
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    public function getMessage(): FormattedText|null
    {
        return $this->message;
    }

    public function setMessage(FormattedText|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userSupportInfo',
            'message' => $this->getMessage(),
            'author' => $this->getAuthor(),
            'date' => $this->getDate(),
        ];
    }
}
