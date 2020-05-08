<?php

namespace itcomgk\bitrix24\crm;

/**
 * Статусы типа "источник" в подключенном битриксе, необходимые для интеграции, создаются адмнистратором
 * ENTITY_ID==SOURCE
 *
 * @package itcomgk\bitrix24\crm
 */
class StatusExpectedSourceIds
{
    const LEGACY_CRM = 'LEGACY_CRM';
    const PORTAL_ITCOM_SELF = 'PORTAL_ITCOM_SELF';
    const PORTAL_ITCOM_PARTNER = 'PORTAL_ITCOM_PARTNER';
    const FRAME_DUMMY = 'FRAME_DUMMY';
}
