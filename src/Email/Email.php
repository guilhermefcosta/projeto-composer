<?php

/**
 * @category
 * @package
 * @author Name <email@email.com>
 * @license
 * @link http://url.com
 */

declare(strict_types=1);

namespace Ferreira\CursoComposer\Email;

use DomainException;
use Exception;
use PharException;

final class Email
{
    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        for ($i = 0; $i < 5; $i++) {
            # code...
        }

        $this->email = $email;
    }


    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new DomainException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}
