<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches a user by their phone number. Returns a 404 error if the user can't be found
 */
class SearchUserByPhoneNumber extends User implements \JsonSerializable
{
    public function __construct(
        /** Phone number to search for */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Pass true to get only locally available information without sending network requests */
        #[SerializedName('only_local')]
        private bool $onlyLocal,
    ) {
    }

    /**
     * Get Phone number to search for
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number to search for
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Pass true to get only locally available information without sending network requests
     */
    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    /**
     * Set Pass true to get only locally available information without sending network requests
     */
    public function setOnlyLocal(bool $onlyLocal): self
    {
        $this->onlyLocal = $onlyLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchUserByPhoneNumber',
            'phone_number' => $this->getPhoneNumber(),
            'only_local' => $this->getOnlyLocal(),
        ];
    }
}
