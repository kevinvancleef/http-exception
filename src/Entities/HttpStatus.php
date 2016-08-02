<?php
namespace Coolblue\Entities;

class HttpStatus
{
    /**
     * The http status code.
     * @var int
     */
    private $code;

    /**
     * Http status code description.
     * @var string
     */
    private $description;

    public function __construct($code, $description)
    {
        $this->code = (int)$code;
        $this->description = (string)$description;
    }

    /**
     * Returns the http status code.
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Return the http status description.
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
