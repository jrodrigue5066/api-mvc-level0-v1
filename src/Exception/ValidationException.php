<?php

declare(strict_types=1);

namespace App\Exception;

final class ValidationException extends ApiException
{
    public function __construct(
        string $message = 'Validation Error',
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, 400, $previous);
    }
}
