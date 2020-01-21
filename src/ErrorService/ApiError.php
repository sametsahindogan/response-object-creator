<?php

namespace Sametsahindogan\ResponseObjectCreator\ErrorService;

use Sametsahindogan\ResponseObjectCreator\Interfaces\ErrorObjectInterface;

/**
 * Class ApiError
 * @package Sametsahindogan\ResponseObjectCreator\ErrorService
 */
class ApiError implements ErrorObjectInterface
{
    /** @var string $message */
    protected $message;

    /** @var string $title */
    protected $title;

    /** @var int $code */
    protected $code;

    /** @var array $extra */
    protected $extra;

    /**
     * ApiError constructor.
     *
     * @param string $message
     * @param string $title
     * @param int $code
     * @param array $extra
     */
    public function __construct(String $message, String $title = '', int $code = 0, array $extra = [])
    {
        $this->message = $message;
        $this->title = $title;
        $this->code = $code;
        $this->extra = $extra;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return array
     */
    public function getExtra(): array
    {
        return $this->extra;
    }
}
