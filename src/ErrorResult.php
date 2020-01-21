<?php

namespace Sametsahindogan\ResponseObjectCreator;

use Sametsahindogan\ResponseObjectCreator\ErrorService\ErrorBuilder;

/**
 * Class ErrorResult
 * @package Sametsahindogan\ResponseObjectCreator
 */
class ErrorResult extends Result
{
    /** @var bool $success */
    public $success = false;

    /**
     * ErrorResult constructor.
     * @param ErrorBuilder $error_builder
     * @param int $status_code
     */
    public function __construct(ErrorBuilder $error_builder, int $status_code = 400)
    {
        $this->data = $error_builder->buildAsArray();
        $this->status_code = $status_code;
    }
}
