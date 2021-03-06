<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Bridge\Symfony\FixtureBuilder\ExpressionLanguage\Lexer;

use Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\IsolatedSymfonyBuiltInLexer;

/**
 * {@inheritdoc}
 *
 * @group integration
 */
class LexerIntegrationTest extends \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\LexerIntegrationTest
{
    public function setUp()
    {
        $this->lexer = new IsolatedSymfonyBuiltInLexer();
    }
}
