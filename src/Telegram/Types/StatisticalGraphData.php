<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A graph data @json_data Graph data in JSON format @zoom_token If non-empty, a token which can be used to receive a zoomed in graph
 */
class StatisticalGraphData extends StatisticalGraph implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('json_data')]
        private string $jsonData,
        #[SerializedName('zoom_token')]
        private string $zoomToken,
    ) {
    }

    public function getJsonData(): string
    {
        return $this->jsonData;
    }

    public function setJsonData(string $jsonData): self
    {
        $this->jsonData = $jsonData;

        return $this;
    }

    public function getZoomToken(): string
    {
        return $this->zoomToken;
    }

    public function setZoomToken(string $zoomToken): self
    {
        $this->zoomToken = $zoomToken;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'statisticalGraphData',
            'json_data' => $this->getJsonData(),
            'zoom_token' => $this->getZoomToken(),
        ];
    }
}
