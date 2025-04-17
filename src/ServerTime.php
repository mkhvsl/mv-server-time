<?php

namespace Mkhvsl\MvServerTime;

use DateTimeImmutable;
use DateTimeInterface;
use RuntimeException;

class ServerTime
{
    protected const API_URL = 'http://worldtimeapi.org/api/ip/';

    /**
     * Get current time for the server or given IP address.
     *
     * @param string|null $ip
     * @return DateTimeInterface
     * @throws RuntimeException
     */
    public function now(?string $ip = null): DateTimeInterface
    {
        $url = self::API_URL . ($ip ? $ip : '');

        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
            ]
        ]);

        $response = @file_get_contents($url, false, $context);

        if (!$response) {
            throw new RuntimeException("Unable to fetch time from API");
        }

        $data = json_decode($response, true);

        if (!isset($data['datetime'])) {
            throw new RuntimeException("Invalid response from API");
        }

        return new DateTimeImmutable($data['datetime']);
    }
}
