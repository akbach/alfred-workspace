<?php
$projects = [];
foreach (glob("projects/*.php") as $filename){
  include $filename;
}
require_once 'actions.lib.php';
$search = null;
$data = [];
$queryArray = explode(' ', trim($query));
foreach ($projects as $project) {
    $actions = $project['actions']();
    foreach ($actions as $action) {
        $actionData = [
            'keywords' => implode(' ', [$project['client'], $project['title'], $action['title'], $action['keywords']]),
            'title' => implode(' :: ', [ $project['client'] , $project['title'],$action['title']]),
            'subtitle' => implode(' :: ', [$action['title'], $project['title'], $project['client']]),
            'arg' => $action['arg']
        ];
        if (isset($action['icon'])) {
            $actionData['icon'] = $action['icon'];
        } else {
            if (isset($project['icon'])) {
                $actionData['icon'] = $project['icon'];
            } else {
                if (isset($client['icon'])) {
                    $actionData['icon'] = $client['icon'];
                }
            }
        }
        $data[] = $actionData;
    }
}
foreach ($queryArray as $queryElm) {
    $search = trim($queryElm);
    $reg = "/$search/i";
    $data = array_filter($data, function ($element) use ($reg, $search) {
        return preg_match($reg, $element['keywords']);
    });
}

$data = array_values($data);
print json_encode(['items' => $data]);
