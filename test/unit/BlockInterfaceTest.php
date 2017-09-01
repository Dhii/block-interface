<?php

namespace Dhii\Output\UnitTest;

use Dhii\Output\BlockInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Output\BlockInterface}.
 *
 * @since [*next-version*]
 */
class BlockInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Output\\BlockInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @param string $output
     *
     * @return BlockInterface
     */
    public function createInstance($output = '')
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__toString($output)
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\\Util\\String\\StringableInterface',
            $subject,
            'Subject is not a valid StringableInterface instance.'
        );
    }

    /**
     * Tests whether the block can be cast into a string.
     *
     * @since [*next-version*]
     */
    public function testCanBeCastToString()
    {
        $expected = 'foobar';
        $subject  = $this->createInstance($expected);
        $string   = (string) $subject;

        $this->assertEquals($expected, $string, 'Subject did not render correctly.');
    }
}
