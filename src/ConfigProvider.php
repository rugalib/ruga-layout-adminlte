<?php

declare(strict_types=1);

namespace Ruga\Layout\AdminLTE;

/**
 * ConfigProvider.
 *
 * @author Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class ConfigProvider
{
    public function __invoke()
    {
        return [
            'templates' => [
                'layout' => 'layout::adminlte-default',
                'paths' => [
                    'layout' => [__DIR__ . "/../templates/layout"]
//            This is defined in the module src/**/src/ConfigProvider.php
//            'part' => [__DIR__ . '/../../src/Notused/template/part']
                ],
            ],
            'ruga' => [
                'asset' => [
                    'rugalib/ruga-layout-adminlte' => [
                        'scripts' => ['js/adminlte.js', 'plugins/sparkline/sparkline.js'],
                        'stylesheets' => ['css/adminlte.min.css'],
                        'require' => [
                            'rugalib/asset-jquery' => '^3.5',
                            'rugalib/asset-jqueryui' => '^1.11',
                            'rugalib/asset-bootstrap' => '^4.6',
                        ],
                    ],
                ],
            ],
        ];
    }
}
