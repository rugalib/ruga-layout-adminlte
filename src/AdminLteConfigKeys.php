<?php

declare(strict_types=1);

namespace Ruga\Layout\AdminLTE;

use Ruga\Std\Enum\Exception\OutOfRangeException;

abstract class AdminLteConfigKeys extends \Ruga\Std\Enum\AbstractEnum
{
    const LTE_PART_PRELOADER = 'adminlte_part_preloader';
    const LTE_PART_NAVBAR_LINKS = 'adminlte_part_navbar_links';
    const LTE_PART_NAVBAR_SEARCH = 'adminlte_part_navbar_search';
    const LTE_PART_MESSAGES_DROPDOWN = 'adminlte_part_messages_dropdown';
    const LTE_PART_NOTIFICATIONS_DROPDOWN = 'adminlte_part_notifications_dropdown';
    const LTE_PART_BRAND_LOGO = 'adminlte_part_brand_logo';
    const LTE_PART_SIDEBAR_USER_PANEL = 'adminlte_part_sidebar_user_panel';
    const LTE_PART_SIDEBAR_SEARCH = 'adminlte_part_sidebar_search';
    const LTE_PART_SIDEBAR_MENU = 'adminlte_part_sidebar_menu';
    const LTE_PART_FOOTER = 'adminlte_part_footer';
    
    
    private const defaultValues = [
        self::LTE_PART_PRELOADER => 'part::adminlte-preloader-default',
        self::LTE_PART_NAVBAR_LINKS => 'part::adminlte-navbar-links-default',
        self::LTE_PART_NAVBAR_SEARCH => 'part::adminlte-navbar-search-default',
        self::LTE_PART_MESSAGES_DROPDOWN => 'part::adminlte-messages-dropdown-default',
        self::LTE_PART_NOTIFICATIONS_DROPDOWN => 'part::adminlte-messages-dropdown-default',
        self::LTE_PART_BRAND_LOGO => 'part::adminlte-brand-logo-default',
        self::LTE_PART_SIDEBAR_USER_PANEL => 'part::adminlte-sidebar-user-panel-default',
        self::LTE_PART_SIDEBAR_SEARCH => 'part::adminlte-sidebar-search-default',
        self::LTE_PART_SIDEBAR_MENU => 'part::adminlte-sidebar-menu-default',
        self::LTE_PART_FOOTER => 'part::adminlte-footer-default',
    ];
    
    
    
    public static function getDefaultValues(): array
    {
        return self::defaultValues;
    }
    
    
    
    public static function getDefaultValue($offset)
    {
        if (!self::isValidValue($offset)) {
            throw new OutOfRangeException("'{$offset}' is not a valid config key");
        }
        return self::defaultValues[$offset];
    }
    
}