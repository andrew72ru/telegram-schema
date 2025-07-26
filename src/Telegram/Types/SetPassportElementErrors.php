<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs the user that some of the elements in their Telegram Passport contain errors; for bots only. The user will not be able to resend the elements, until the errors are fixed @user_id User identifier @errors The errors
 */
class SetPassportElementErrors extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('errors')]
        private array|null $errors = null,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getErrors(): array|null
    {
        return $this->errors;
    }

    public function setErrors(array|null $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPassportElementErrors',
            'user_id' => $this->getUserId(),
            'errors' => $this->getErrors(),
        ];
    }
}
