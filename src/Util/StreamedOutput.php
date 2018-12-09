<?php

namespace App\Util;

use RuntimeException;
use Symfony\Component\Console\Output\StreamOutput;

/**
 * Class StreamedOutput
 *
 * @package App\Util
 */
class StreamedOutput extends StreamOutput
{
    /**
     * @return StreamedOutput
     */
    public static function create()
    {
        return new self(fopen('php://stdout', 'w'));
    }

    /**
     * @param $message
     * @param $newline
     */
    protected function doWrite($message, $newline)
    {
        if (
            false === @fwrite($this->getStream(), $message) ||
            (
                $newline &&
                (false === @fwrite($this->getStream(), PHP_EOL))
            )
        ) {
            throw new RuntimeException('Unable to write output.');
        }

        echo $message;

        ob_flush();
        flush();
    }
}