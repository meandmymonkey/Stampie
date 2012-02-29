<?php

namespace Stampie\Integration;

use Stampie\MessageInterface;

class SwiftMessageWrapper implements MessageInterface
{
    /**
     * @var \Swift_Mime_Message
     */
    private $swiftMessage;

    /**
     * Constructor.
     *
     * @param \Swift_Mime_Message $message
     */
    public function __construct(\Swift_Mime_Message $message)
    {
        $this->swiftMessage = $message;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        $sender = $this->swiftMessage->getSender();
        if ($sender) {
            var_dump($sender);
            return $sender;
        }

        foreach ($this->swiftMessage->getFrom() as $email => $name) {
            $address = $email;
            if ($name) {
                $address = $name.' <'.$email.'>';
            }

            return $address;
        }
    }

    /**
     * @return string
     */
    public function getTo()
    {
        // TODO: Implement getTo() method.
    }

    /**
     * @return string
     */
    public function getCc()
    {
        // TODO: Implement getCc() method.
    }

    /**
     * @return $string
     */
    public function getBcc()
    {
        // TODO: Implement getBcc() method.
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        // TODO: Implement getSubject() method.
    }

    /**
     * @return string
     */
    public function getReplyTo()
    {
        // TODO: Implement getReplyTo() method.
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        // TODO: Implement getHtml() method.
    }

    /**
     * @return string
     */
    public function getText()
    {
        // TODO: Implement getText() method.
    }
}
