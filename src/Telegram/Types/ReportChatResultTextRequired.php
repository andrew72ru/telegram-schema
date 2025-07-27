<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user must add additional text details to the report @option_id Option identifier for the next reportChat request @is_optional True, if the user can skip text adding.
 */
class ReportChatResultTextRequired extends ReportChatResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('option_id')]
        private string $optionId,
        #[SerializedName('is_optional')]
        private bool $isOptional,
    ) {
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function getIsOptional(): bool
    {
        return $this->isOptional;
    }

    public function setIsOptional(bool $isOptional): self
    {
        $this->isOptional = $isOptional;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChatResultTextRequired',
            'option_id' => $this->getOptionId(),
            'is_optional' => $this->getIsOptional(),
        ];
    }
}
