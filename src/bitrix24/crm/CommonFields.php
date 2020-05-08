<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей, встречающихся во многих сущностях CRM (не обязательно)
 *
 * @package itcomgk\bitrix24\crm
 */
class CommonFields
{
    /**
     * Целочисленный инкрементальный айди...
     */
    const ID = 'ID';
    /**
     * Основное название сущности
     */
    const TITLE = 'TITLE';
    /**
     * Комментарии к сущности, поддерживающие HTML
     */
    const COMMENT = 'COMMENTS';
    /**
     * Строковый id статуса принадлжащего к сущности словаря 'SOURCE'
     *
     * @see StatusFields::STATUS
     * @see StatusEntityTypes::SOURCE
     */
    const SOURCE = 'SOURCE_ID';
    const SOURCE_DETAILS = 'SOURCE_DESCRIPTION';
    /**
     * Поле для строки ИНН, создается администратором
     */
    const INN = 'UF_INN';
    /**
     * Поле для синхронизации с соответствующей сущностью в старой CRM, создается администратором
     */
    const SYNC_ID = 'UF_LEGACY_SYNC_ID';
    /**
     * Коллекция сущностей Мультиполя, содержащая телефоны
     *
     * @see MultifieldFields
     */
    const PHONES = 'PHONE';
    /**
     * Коллекция сущностей Мультиполя, содержащая емейлы
     *
     * @see MultifieldFields
     */
    const EMAILS = 'EMAIL';
    /**
     * Коллекция сущностей Мультиполя, содержащая сайты
     *
     * @see MultifieldFields
     */
    const SITES = 'WEB';
    /**
     * ID отвественного за лид пользователя (который отображается на карточке лида)
     */
    const ASSIGNED_TO_USER = 'ASSIGNED_BY_ID';
}