<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей комментария в таймлайнах сущностей CRM
 *
 * @package itcomgk\bitrix24\crm
 */
class TimelineCommentFields
{
    const ID = 'ID';
    /**
     * ID сущности владельца
     */
    const ENTITY = 'ENTITY_ID';
    /**
     * Тип сущности владельца
     *
     * @see TimelineCommentEntityTypes
     */
    const ENTITY_TYPE = 'ENTITY_TYPE';
    /**
     * Содержимое комментария с частичной поддержкой HTML
     */
    const COMMENT = 'COMMENT';
}