<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Nelmio\Alice\Throwable\Exception\FixtureBuilder\Denormalizer;

/**
 * @private
 */
final class DenormalizerExceptionFactory
{
    public static function createForUndenormalizableConstructor(): UnexpectedValueException
    {
        return new UnexpectedValueException('Could not denormalize the given constructor.');
    }

    public static function createForUnparsableValue(string $value, int $code = 0, \Throwable $previous): UnexpectedValueException
    {
        return new UnexpectedValueException(
            sprintf(
                'Could not parse value "%s".',
                $value
            ),
            $code,
            $previous
        );
    }

    public static function createDenormalizerNotFoundForFixture(string $fixtureId): DenormalizerNotFoundException
    {
        return new DenormalizerNotFoundException(
            sprintf(
                'No suitable fixture denormalizer found to handle the fixture with the reference "%s".',
                $fixtureId
            )
        );
    }

    public static function createDenormalizerNotFoundUnexpectedCall(string $method, int $code = 0, \Throwable $previous = null): DenormalizerNotFoundException
    {
        return new DenormalizerNotFoundException(
            sprintf(
                'Expected method "%s" to be called only if it has a denormalizer.',
                $method
            ),
            $code,
            $previous
        );
    }
}
