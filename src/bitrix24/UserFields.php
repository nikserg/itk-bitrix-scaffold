<?php

namespace itcomgk\bitrix24;

/**
 * Описание полей сущости Пользователя
 *
 * @package itcomgk\bitrix24
 */
class UserFields
{
    const ID = 'ID';
    const FIRST_NAME = 'NAME';
    const LAST_NAME = 'LAST_NAME';
    const JOB_TITLE = 'WORK_POSITION';
    const IS_ACTIVE = 'ACTIVE';
    const EMAIL = 'EMAIL';
    /**
     * Коллекция ID подразделений к которым принадлежит пользователь
     * Если не привязано ни одного, api положит в него false
     */
    const DEPARTMENTS = 'UF_DEPARTMENT';
}
