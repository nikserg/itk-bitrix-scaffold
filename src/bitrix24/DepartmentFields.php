<?php

namespace itcomgk\bitrix24;

/**
 * Описание полей сущости Подразделения
 *
 * @package itcomgk\bitrix24
 */
class DepartmentFields
{
    const ID = 'ID';
    const TITLE = 'NAME';
    /**
     * Содержит ID вышестоящего подразделения
     */
    const PARENT = 'PARENT';
    /**
     * Содержит ID пользователя - руководителя департамента
     */
    const HEAD = 'UF_HEAD';
}