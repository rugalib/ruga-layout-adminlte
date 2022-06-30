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
            'ruga' => [
                'asset' => [
                    'rugalib/ruga-asset-adminlte' => [
                        'scripts' => [],
                        'stylesheets' => [],
                    ],
                ],
            ],
        ];
    }
}
