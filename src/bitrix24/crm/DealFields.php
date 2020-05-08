<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей сущости Сделки
 *
 * @package itcomgk\bitrix24\crm
 */
class DealFields extends CommonFields
{
    /**
     * ID лида-источника сделки
     */
    const LEAD = 'LEAD_ID';
    /**
     * ID связанной со сделкой компании
     */
    const COMPANY = 'COMPANY_ID';
}