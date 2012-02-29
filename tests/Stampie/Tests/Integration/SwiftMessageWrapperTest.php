<?php

namespace Stampie\Tests\Integration;

use Stampie\Integration\SwiftMessageWrapper;

class SwiftMessageWrapperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider fromProvider
     */
    public function testFrom($stampieFrom, $swiftFrom, $swiftSender = null)
    {
        $swiftMessage = new \Swift_Message();
        $swiftMessage->setFrom($swiftFrom);
        if ($swiftSender) {
            $swiftMessage->setSender($swiftSender);
        }

        $wrapper = new SwiftMessageWrapper($swiftMessage);

        $this->assertEquals($stampieFrom, $wrapper->getFrom());
    }

    public function fromProvider()
    {
        return array(
            array('test@example.com', 'test@example.com'),
            array('Test Test <test@example.com>', array('test@example.com' => 'Test Test')),
            array('Test Test <test@example.com>', array('test@example.com' => 'Test Test', 'test2@example.com' => 'Test2 Test2')),
            array('sender@example.com', array('test@example.com' => 'Test Test'), 'sender@example.com'),
        );
    }


}
