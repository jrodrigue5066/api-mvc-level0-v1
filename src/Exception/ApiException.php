<?php

declare(strict_types=1);

namespace App\Exception;

use RuntimeException;

class ApiException extends RuntimeException
{
    public function __construct(
        string $message = 'API Error',
        int $code = 500,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
