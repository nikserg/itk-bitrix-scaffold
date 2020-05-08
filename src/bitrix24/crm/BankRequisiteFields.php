<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание некоторых полей CRM сущости банковских реквизитов, которые привязываются к юридическим реквизитам
 *
 * @package itcomgk\bitrix24\crm
 */
class BankRequisiteFields
{
    const ID = 'ID';
    const TITLE = 'NAME';
    /**
     * Поле содержит id сущности юридических реквизитов к которой принадлежит этот банковский реквизит
     */
    const ENTITY = 'ENTITY_ID';
    /**
     * Наименование банка
     */
    const BANK_NAME = 'RQ_BANK_NAME';
    /**
     * Адрес банка
     */
    const BANK_ADDR = 'RQ_BANK_ADDR';
    const BANK_ROUTE_NUM = 'RQ_BANK_ROUTE_NUM';
    /**
     * БИК
     */
    const BIK = 'RQ_BIK';
    const MFO = 'RQ_MFO';
    const ACC_NAME = 'RQ_ACC_NAME';
    /**
     * Расчетный счёт
     */
    const ACC_NUM = 'RQ_ACC_NUM';
    const IIK = 'RQ_IIK';
    /**
     * Валюта счёта
     */
    const ACC_CURRENCY = 'RQ_ACC_CURRENCY';
    /**
     * Кор. счёт
     */
    const COR_ACC_NUM = 'RQ_COR_ACC_NUM';
    const IBAN = 'RQ_IBAN';
    const SWIFT = 'RQ_SWIFT';
    const BIC = 'RQ_BIC';
    /**
     * Комментарий
     */
    const COMMENTS = 'COMMENTS';
    /**
     * Внешний источник
     */
    const ORIGINATOR_ID = 'ORIGINATOR_ID';
}