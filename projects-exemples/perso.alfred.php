<?php
$projects[] = [
    'client'=>'perso'
    'title' => 'Alfred Workspace',
    'subtitle' => 'Alfred Workspace',
    'actions' => function () {
        $folder = '/Users/ach/Workspace/projects/perso/alfred-workspace';
        $actions = [];
        $actions[] = array_merge(getAction($folder, 'phpstorm'), []);
        $actions[] = array_merge(getAction($folder, 'finder'), []);
        $actions[] = array_merge(getAction($folder, 'iterm'), []);
        $actions[] = array_merge(getAction($folder, 'sublime'), []);
        $actions[] = array_merge(getAction($folder, 'sourcetree'), []);
        return $actions;
    },
];
