<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An option changed its value @name The option name @value The new option value.
 */
class UpdateOption extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
        #[SerializedName('value')]
        private OptionValue|null $value = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): OptionValue|null
    {
        return $this->value;
    }

    public function setValue(OptionValue|null $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateOption',
            'name' => $this->getName(),
            'value' => $this->getValue(),
        ];
    }
}
