<?php

namespace itcomgk\bitrix24\crm;

/**
 * Некоторые предустановленные "типы" значений для мультиполей
 *
 * @see MultifieldFields::TYPE
 *
 * Подобные типы <i>могут</i> иметь локализованное описание в Битриксе
 * Они также <i>могут</i> форматироваться специализированным образом
 *
 *
 * @package itcomgk\bitrix24\crm
 */
class MultifieldSoftTypes
{
    const OTHER = 'OTHER';
    /*
     * Типы для телефонных номеров
     */
    const PHONE_WORK = 'WORK';
    const PHONE_HOME = 'HOME';
    const PHONE_MOBILE = 'MOBILE';
    const PHONE_FAX = 'FAX';
    const PHONE_PAGER = 'PAGER';
    const PHONE_MAILING = 'MAILING';
    /*
     * Типы для электронной почты
     */
    const EMAIL_WORK = 'WORK';
    const EMAIL_HOME = 'HOME';
    const EMAIL_MAILING = 'MAILING';
    /*
     * Типы для веб-страниц
     */
    const WEB_WORK = 'WORK';
    const WEB_HOME = 'HOME';
    const WEB_FACEBOOK = 'FACEBOOK';
    const WEB_VK = 'VK';
    const WEB_LIVEJOURNAL = 'LIVEJOURNAL';
    const WEB_TWITTER = 'TWITTER';
    /*
     * Типы для систем обмена сообщениями
     */
    const IM_FACEBOOK = "FACEBOOK";
    const IM_VK = "VK";
    const IM_TELEGRAM = "TELEGRAM";
    const IM_SKYPE = "SKYPE";
    const IM_VIBER = "VIBER";
    const IM_INSTAGRAM = "INSTAGRAM";
    const IM_ICQ = "ICQ";
    const IM_MSN = "MSN";
    const IM_JABBER = "JABBER";
    const IM_BITRIX24 = "BITRIX24";
    /**
     * Подразумевает онлайн чат в битриксе
     */
    const IM_OPENLINE = "OPENLINE";
    /**
     * Подразумевает открытые линии Битрикс (комбайн чатов)
     */
    const IM_OPEN_LINES = "IMOL";
}