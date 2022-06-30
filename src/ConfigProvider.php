<?php

declare(strict_types=1);

namespace Ruga\Asset\Skeleton;

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
                    'rugalib/ruga-asset-alertify' => [
                        'scripts' => [],
                        'stylesheets' => [],
                    ],
                ],
            ],
        ];
    }
}
