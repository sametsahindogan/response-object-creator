<?php

namespace Sametsahindogan\ResponseObjectCreator;

/**
 * Class Result
 * @package Sametsahindogan\ResponseObjectCreator
 */
abstract class Result
{
    /** @var bool $success */
    public  $success = true;

    /** @var int $status_code */
    public $status_code = 200;

    /** @var array $data */
    public $data = [];

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->status_code;
    }

    /**
     * @param $status_code
     * @return $this
     */
    public function setStatusCode($status_code): self
    {
        $this->status_code = $status_code;
        return $this;
    }
}
