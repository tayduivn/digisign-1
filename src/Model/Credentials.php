<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Model;

final class Credentials
{

    /**
     * @var string
     */
    private $accessKey;
    /**
     * @var string
     */
    private $secretKey;

    public function __construct(string $accessKey, string $secretKey)
    {
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * @return array<mixed>
     */
    public function toArray()
    {
        return [
            'accessKey' => $this->getAccessKey(),
            'secretKey' => $this->getSecretKey(),
        ];
    }
}
