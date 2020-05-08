<?php

namespace itcomgk\bitrix24;

use Psr\Log\LogLevel;
use Yii;

/**
 * Интегарция специально для логгера Yii в контексте Zurmo CRM
 *
 * @see Yii
 *
 * @package itcomgk\bitrix24
 */
class ZurmoPsrLog implements \Psr\Log\LoggerInterface
{
    public $category;

    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function emergency($message, array $context = [])
    {
        Yii::log($message, LogLevel::EMERGENCY, $this->category);
    }

    public function alert($message, array $context = [])
    {
        Yii::log($message, LogLevel::ALERT, $this->category);
    }

    public function critical($message, array $context = [])
    {
        Yii::log($message, LogLevel::CRITICAL, $this->category);
    }

    public function error($message, array $context = [])
    {
        Yii::log($message, LogLevel::ERROR, $this->category);
    }

    public function warning($message, array $context = [])
    {
        Yii::log($message, LogLevel::WARNING, $this->category);
    }

    public function notice($message, array $context = [])
    {
        Yii::log($message, LogLevel::NOTICE, $this->category);
    }

    public function info($message, array $context = [])
    {
        Yii::log($message, LogLevel::INFO, $this->category);
    }

    public function debug($message, array $context = [])
    {
        Yii::log($message, LogLevel::DEBUG, $this->category);
    }

    public function log($level, $message, array $context = [])
    {
        Yii::log($message, $level, $this->category);
    }
}