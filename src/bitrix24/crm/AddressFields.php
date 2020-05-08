<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание некоторых полей CRM сущости Адреса в сущностях CRM...
 *
 * @package itcomgk\bitrix24\crm
 */
class AddressFields
{
    /**
     * Условный тип адреса
     *
     * @see AddressTypes
     */
    const TYPE = 'TYPE_ID';
    /**
     * Поле содержит id сущности CRM к которой принадлежит адрес
     */
    const ENTITY = 'ENTITY_ID';
    /**
     * Поле содержит id типа сущности CRM к которой принадлежит адрес
     *
     * @see NumericEntityTypes
     */
    const ENTITY_TYPE = 'ENTITY_TYPE_ID';
    /**
     * Улица, дом, корпус, строение
     */
    const ADDRESS_1 = 'ADDRESS_1';
    /**
     * Квартира / офис
     */
    const ADDRESS_2 = 'ADDRESS_2';
    const CITY = 'CITY';
    const POSTAL_CODE = 'POSTAL_CODE';
    const REGION = 'REGION';
    /**
     * Область
     */
    const PROVINCE = 'PROVINCE';
    const COUNTRY = 'COUNTRY';
    const COUNTRY_CODE = 'COUNTRY_CODE';
    const ANCHOR_TYPE = 'ANCHOR_TYPE_ID';
    const ANCHOR = 'ANCHOR_ID';
}