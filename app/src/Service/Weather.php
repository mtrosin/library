<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Weather
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function get(): string
    {
        $response = $this->client->request(
            'GET',
            'https://api.hgbrasil.com/weather?key=615d7537'
        );

        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $content['results']['description'] . '(' . $content['results']['temp'] . '°)';
    }
}