<?php

namespace Sametsahindogan\ResponseObjectCreator\ErrorService;

/**
 * Class ErrorBuilder
 * @package Sametsahindogan\ResponseObjectCreator\ErrorService
 */
class ErrorBuilder
{
    /** @var string $message */
    protected $message = '';

    /** @var string $title */
    protected $title = '';

    /** @var int $code */
    protected $code = 0;

    /** @var array $extra */
    protected $extra = [];

    /**
     * @param string $message
     * @return ErrorBuilder
     */
    public function message(string $message): ErrorBuilder
    {
        $this->message = trim($message);
        return $this;
    }

    /**
     * @param string $title
     * @return ErrorBuilder
     */
    public function title(string $title): ErrorBuilder
    {
        $this->title = trim($title);
        return $this;
    }

    /**
     * @param int $code
     * @return ErrorBuilder
     */
    public function code(int $code): ErrorBuilder
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param array $extra
     * @return ErrorBuilder
     */
    public function extra(array $extra): ErrorBuilder
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return bool
     */
    private function validate(): bool
    {
        return $this->message !== '';
    }

    /**
     * @return array
     */
    public function buildAsArray(): array
    {
        if (!$this->validate()) return [];

        return [
            'message' => $this->message,
            'title' => $this->title,
            'code' => $this->code,
            'extra' => $this->extra,
        ];
    }

    /**
     * @return bool|ApiError
     */
    public function buildAsObject()
    {
        if (!$this->validate()) return false;

        return new ApiError($this->message, $this->title, $this->code, $this->extra);
    }
}
