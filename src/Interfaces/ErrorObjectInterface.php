<?php

namespace Sametsahindogan\ResponseObjectCreator\Interfaces;

/**
 * Interface ErrorObjectInterface
 * @package Sametsahindogan\ResponseObjectCreator\Interfaces
 */
interface ErrorObjectInterface
{
    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @return array
     */
    public function getExtra(): array;
}
