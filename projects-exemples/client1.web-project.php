<?php
$projects[] = [
    'client'=>'quicktech',
    'title' => 'KeepWhite-API',
    'subtitle' => 'KeepWhite-API',
    'actions' => function () {
        $folder = '/Users/ach/Workspace/clients/client1/web-app';
        $apiFile = '/Users/ach/Workspace/clients/client1/web-app/kw.paw';
        $url_local = 'http://localhost:3000';
        $url_dev = 'https://dev.domaine.fr';
        $url_prod = 'http://domaine.fr';
        $actions = [];
        $actions[] = array_merge(getAction($folder, 'finder'), []);

        $actions[] = array_merge(getAction($url_local, 'chrome'), ['title'=>'Local']);
        $actions[] = array_merge(getAction($url_dev, 'chrome'), ['title'=>'Dev']);
        $actions[] = array_merge(getAction($url_prod, 'chrome'), ['title'=>'Prod']);

        $actions[] = array_merge(getAction($folder, 'iterm'), []);
        $actions[] = array_merge(getAction($folder, 'webstorm'), []);
        $actions[] = array_merge(getAction($folder, 'sourcetree'), []);

        $actions[] = array_merge(getAction($apiFile, 'paw'), []);
        $actions[] = array_merge(getAction($folder, 'sublime'), []);
        return $actions;
    },
];

