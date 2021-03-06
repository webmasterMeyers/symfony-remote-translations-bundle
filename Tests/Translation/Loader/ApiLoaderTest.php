<?php

namespace YB\Bundle\RemoteTranslationsBundle\Tests\Translation\Loader;

use PHPUnit_Framework_TestCase;

/**
 * Class ApiLoaderTest
 * @package YB\Bundle\RemoteTranslationsBundle\Tests\Translation\Loader
 */
class ApiLoaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param mixed $expected
     * @param mixed $result
     *
     * @dataProvider getExamples
     */
    public function testIndex($expected, $result)
    {
        $this->assertSame($expected, $result);
    }

    /**
     * @return \Generator
     */
    public function getExamples()
    {
        yield ['Lorem Ipsum', 'Lorem Ipsum'];
    }
}
