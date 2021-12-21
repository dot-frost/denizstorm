<?php

namespace App\Http\Livewire\Dashboard\Components\Template;

use Livewire\Component;
use function view;

class Sidebar extends Component
{
    public array $items = [
        [
            'name' => 'داشبورد',
            'type' => 'link',
            'route-name' => 'admin.index',
            'icon' => 'mdi-home',
            'url' => null,
        ],
        [
            'name' => 'دسته ها',
            'type' => 'group',
            'icon' => 'mdi-folder-outline',
            'group' => 'category-link-group',
            'links' => [
                [
                    'name' => 'همه',
                    'type' => 'link',
                    'route-name' => 'admin.categories.index',
                    'url' => null,
                ],
                [
                    'name' => 'ایجاد',
                    'type' => 'link',
                    'route-name' => 'admin.categories.create',
                    'url' => null,
                ],
            ],
        ],
        [
            'name' => 'دستگاه ها',
            'type' => 'group',
            'icon' => 'mdi-devices',
            'group' => 'device-link-group',
            'links' => [
                [
                    'name' => 'همه',
                    'type' => 'link',
                    'route-name' => 'admin.devices.index',
                    'url' => null,
                ],
                [
                    'name' => 'ایجاد',
                    'type' => 'link',
                    'route-name' => 'admin.devices.create',
                    'url' => null,
                ],
            ],
        ],
        [
            'name' => 'سفارشات',
            'type' => 'group',
            'icon' => 'mdi-order-bool-descending',
            'group' => 'order-link-group',
            'links' => [
                [
                    'name' => 'همه',
                    'type' => 'link',
                    'route-name' => 'admin.orders.index',
                    'url' => null,
                ],
            ],
        ],
        [
            'name' => 'تنظیمات',
            'type' => 'group',
            'icon' => 'mdi-wrench-outline',
            'group' => 'settings-link-group',
            'links' => [
                [
                    'name' => 'فرم سفارش',
                    'type' => 'link',
                    'route-name' => 'admin.settings.order-form',
                    'url' => null,
                ],
            ],
        ],
        [
        'name' => 'حساب کاربری',
        'type' => 'link',
        'route-name' => 'admin.profile',
        'icon' => 'mdi-account',
        'url' => null,
    ],
    ];

    public function render()
    {
        return view('dashboard.components.template.sidebar');
    }
}
