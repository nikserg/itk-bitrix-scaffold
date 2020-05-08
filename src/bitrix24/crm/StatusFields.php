<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей словарной сущости Статуса
 *
 * @package itcomgk\bitrix24\crm
 */
class StatusFields
{
    const ID = 'ID';
    const TITLE = 'NAME';
    /**
     * Поле содержит строковый id сущности словаря к которой принадлежит статус
     *
     * @see StatusEntityTypes
     */
    const ENTITY = 'ENTITY_ID';
    /**
     * Поле содержит строковый id статуса который используется для связки с ним в других сущностях
     */
    const STATUS = 'STATUS_ID';
}