<?php

namespace Sametsahindogan\ResponseObjectCreator;

/**
 * Class SuccessResult
 * @package Sametsahindogan\ResponseObjectCreator
 */
class SuccessResult extends Result
{
    /**
     * SuccessResult constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = !empty($data) ? $data : new \stdClass();
    }
}
