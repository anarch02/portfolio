<?php
    return [
        [
            'route' => 'categories',
            'inputs' => [
                'name'
                ]  
        ],
        [
            'route' => 'articles',
            'inputs' => [
                'title',
                'preview',
                'description'
                ]  
        ],
        [
            'route' => 'projects.index',
            'inputs' => [
                'name',
                'url',
                'description'
                ]  
        ],
    ];