<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Test\TestCase;

final class IetfTest extends TestCase
{
    public function testLanguageTagWithPossibleSubtag(): void
    {
        $value = $this->faker->ietfLanguageTag();

        self::assertIsString($value);

        self::assertGreaterThanOrEqual(2, strlen($value), 'Language tag must be at least 2 characters long');
        self::assertLessThanOrEqual(8, strlen($value), 'Language tag must be at most 8 characters long');
    }

    public function testLanguageTagWithoutPossibleSubtag(): void
    {
        $value = $this->faker->ietfLanguageTag(false);

        self::assertIsString($value);

        self::assertGreaterThanOrEqual(2, strlen($value), 'Language tag must be at least 2 characters long');
        self::assertLessThanOrEqual(3, strlen($value), 'Language tag must be at most 3 characters long');
    }
}
