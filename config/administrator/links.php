<?php

use App\Models\Link;

return [
    'title' => '推荐资源',
    'single' => '推荐资源',

    'model' => Link::class,

    // 访问权限判断
    'permission' => function () {
        // 只允许站长管理推荐资源链接
        return Auth::user()->hasRole('Founder');
    },

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title' => '名称',
            'sortable' => false,
        ],
        'link' => [
            'title' => '链接',
            'sortable' => false,
        ],
        'icon' => [
            'title' => '图标',
            'output' => function ($icon, $model) {
                return empty($icon) ? 'N/A' : '<img src="' . $icon . '" width="24">';
            },
            'sortable' => false,
        ],
        'operation' => [
            'title' => '管理',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title' => '名称',
        ],
        'link' => [
            'title' => '链接',
        ],
        'icon' => [
            'title' => '图标',

            'type' => 'image',

            'location' => public_path() . '/uploads/images/icons/',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '标签 ID',
        ],
        'title' => [
            'title' => '名称',
        ],
    ],
];