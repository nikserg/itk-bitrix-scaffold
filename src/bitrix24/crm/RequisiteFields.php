<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание некоторых полей CRM сущости Реквизита
 *
 * @package itcomgk\bitrix24\crm
 */
class RequisiteFields
{
    const ID = 'ID';
    const TITLE = 'NAME';
    /**
     * Поле содержит id типа карточки реквизита
     *
     * @see RequisitePresetTypes
     */
    const PRESET = 'PRESET_ID';
    /**
     * Поле содержит id сущности CRM к которой принадлежит реквизит
     */
    const ENTITY = 'ENTITY_ID';
    /**
     * Поле содержит id типа сущности CRM к которой принадлежит реквизит
     *
     * @see NumericEntityTypes
     */
    const ENTITY_TYPE = 'ENTITY_TYPE_ID';
    const LEGAL_NAME = 'RQ_NAME';
    const LEGAL_TITLE_SHORT = 'RQ_COMPANY_NAME';
    const LEGAL_TITLE_FULL = 'RQ_COMPANY_FULL_NAME';
    const INN = 'RQ_INN';
    const KPP = 'RQ_KPP';
    const OGRN = 'RQ_OGRN';
    const OGRNIP = 'RQ_OGRNIP';
    /**
     * Ф.И.О. Генерального директора
     */
    const DIRECTOR = "RQ_DIRECTOR";
    /**
     * Основание полномочий
     */
    const AUTHORITY_REASON = "UF_AUTHORITY_REASON";
}