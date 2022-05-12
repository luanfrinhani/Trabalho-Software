<?php

namespace App\Model\Core;

/**
 * Class Message
 * @package App\Model\Core
 * @author Filipe Fico
 */
class Message
{
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $message;
    /**
     * @var
     */
    private $data;
    /**
     * @var
     */
    private $errors;

    public const MESSAGE_SUCCESS = "success";
    public const MESSAGE_ERROR = "danger";
    public const MESSAGE_WARNING = "warning";

    /**
     * @param string $message
     * @param $data
     * @return Message
     */
    public function success(string $message, $data): Message
    {
        $self = new self();

        $self->type = self::MESSAGE_SUCCESS;
        $self->message = $this->filter($message);
        $self->data = $data;
        $self->errors = null;

        return $self;
    }

    /**
     * @param string $message
     * @param $data
     * @param $errors
     * @return Message
     */
    public function error(string $message, $data, $errors): Message
    {
        $self = new self();

        $self->type = self::MESSAGE_ERROR;
        $self->message = $this->filter($message);
        $self->data = $data;
        $self->errors = $errors;

        return $self;
    }

    /**
     * @param string $message
     * @param $data
     * @param $errors
     * @return Message
     */
    public function warning(string $message, $data, $errors): Message
    {
        $self = new self();

        $self->type = self::MESSAGE_WARNING;
        $self->message = $this->filter($message);
        $self->data = $data;
        $self->errors = $errors;

        return $self;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->type == self::MESSAGE_SUCCESS;
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return $this->type == self::MESSAGE_ERROR;
    }

    /**
     * @return bool
     */
    public function isWarning(): bool
    {
        return $this->type == self::MESSAGE_WARNING;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getFlash(): array
    {
        return ['type' => $this->type, 'message' => $this->message];
    }

    /**
     * @param string $message
     * @return string
     */
    private function filter(string $message): string
    {
        return filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
