<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание некоторых полей CRM сущости Адреса в реквизитах...
 *
 * @package itcomgk\bitrix24\crm
 */
class AddressTypes
{
    /**
     * Основной / фактический адрес
     */
    const PRIMARY = 1;
    /**
     * Адрес регистрации
     * Исходное имя константы - Home
     */
    const REGISTERED = 4;
    /**
     * Юридический адрес
     * Исходное имя константы - Registered
     */
    const LEGAL = 6;
    /**
     * Адрес бенефициара
     */
    const BENEFICIARY = 9;
    /**
     * Почтовый
     */
    const POSTAL = 8;
}