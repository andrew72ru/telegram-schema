<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a chat background.
 */
class Background implements \JsonSerializable
{
    public function __construct(
        /** Unique background identifier */
        #[SerializedName('id')]
        private int $id,
        /** True, if this is one of default backgrounds */
        #[SerializedName('is_default')]
        private bool $isDefault,
        /** True, if the background is dark and is recommended to be used with dark theme */
        #[SerializedName('is_dark')]
        private bool $isDark,
        /** Unique background name */
        #[SerializedName('name')]
        private string $name,
        /** Document with the background; may be null. Null only for filled and chat theme backgrounds */
        #[SerializedName('document')]
        private Document|null $document = null,
        /** Type of the background */
        #[SerializedName('type')]
        private BackgroundType|null $type = null,
    ) {
    }

    /**
     * Get Unique background identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique background identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get True, if this is one of default backgrounds.
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * Set True, if this is one of default backgrounds.
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get True, if the background is dark and is recommended to be used with dark theme.
     */
    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    /**
     * Set True, if the background is dark and is recommended to be used with dark theme.
     */
    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    /**
     * Get Unique background name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Unique background name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Document with the background; may be null. Null only for filled and chat theme backgrounds.
     */
    public function getDocument(): Document|null
    {
        return $this->document;
    }

    /**
     * Set Document with the background; may be null. Null only for filled and chat theme backgrounds.
     */
    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get Type of the background.
     */
    public function getType(): BackgroundType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the background.
     */
    public function setType(BackgroundType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'background',
            'id' => $this->getId(),
            'is_default' => $this->getIsDefault(),
            'is_dark' => $this->getIsDark(),
            'name' => $this->getName(),
            'document' => $this->getDocument(),
            'type' => $this->getType(),
        ];
    }
}
