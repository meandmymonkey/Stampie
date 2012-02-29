<?php

namespace Stampie\Integration;

use Stampie\MessageInterface;

interface ConvertibleMessageInterface extends MessageInterface
{
    /**
     * @param string $from
     */
    function setFrom($from);

    /**
     * @param string $from
     */
    function setTo($to);

    /**
     * @param string $from
     */
    function setCc($cc);

    /**
     * @param string $from
     */
    function setBcc($bcc);

    /**
     * @param string $from
     */
    function setSubject($subject);

    /**
     * @param string $from
     */
    function setReplyTo($replyTo);

    /**
     * @param string $from
     */
    function setHeaders($headers);

    /**
     * @param string $from
     */
    function setHtml($html);

    /**
     * @param string $from
     */
    function setText($text);
}
