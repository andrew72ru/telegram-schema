<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A story failed to post. If the story posting is canceled, then updateStoryDeleted will be received instead of this update.
 */
class UpdateStoryPostFailed extends Update implements \JsonSerializable
{
    public function __construct(
        /** The failed to post story */
        #[SerializedName('story')]
        private Story|null $story = null,
        /** The cause of the story posting failure */
        #[SerializedName('error')]
        private Error|null $error = null,
        /** Type of the error; may be null if unknown */
        #[SerializedName('error_type')]
        private CanPostStoryResult|null $errorType = null,
    ) {
    }

    /**
     * Get The failed to post story.
     */
    public function getStory(): Story|null
    {
        return $this->story;
    }

    /**
     * Set The failed to post story.
     */
    public function setStory(Story|null $story): self
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get The cause of the story posting failure.
     */
    public function getError(): Error|null
    {
        return $this->error;
    }

    /**
     * Set The cause of the story posting failure.
     */
    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get Type of the error; may be null if unknown.
     */
    public function getErrorType(): CanPostStoryResult|null
    {
        return $this->errorType;
    }

    /**
     * Set Type of the error; may be null if unknown.
     */
    public function setErrorType(CanPostStoryResult|null $errorType): self
    {
        $this->errorType = $errorType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStoryPostFailed',
            'story' => $this->getStory(),
            'error' => $this->getError(),
            'error_type' => $this->getErrorType(),
        ];
    }
}
