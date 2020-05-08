<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей сущости Контакта
 *
 * @package itcomgk\bitrix24\crm
 */
class ContactFields extends CommonFields
{
    const FIRST_NAME = 'NAME';
    const LAST_NAME = 'LAST_NAME';
    const JOB_TITLE = 'POST';
    /**
     * Основание полномочий
     */
    const AUTHORITY_REASON = "UF_AUTHORITY_REASON";
}