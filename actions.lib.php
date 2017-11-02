<?php
function getToolByName($tooName)
{
    $tools = [
        'finder' => [
            "title"=>'Finder',
            "arg" => 'open',
            'icon' => [
                "path" => './icons/finder.png',
            ],
            "keywords"=>'open fichier dossier dir file',
        ],
        'webstorm' => [
            "title"=>'Webstorm',
            "arg" => 'open -a /Applications/WebStorm.app',
            'icon' => [
                "path" => './icons/webstorm.png',
            ],
            "keywords"=>'edit',
        ],
        'paw' => [
            "title"=>'Paw',
            "arg" => 'open -a /Applications/Paw.app',
            'icon' => [
                "path" => './icons/paw.png',
            ],
            "keywords"=>'rest api',
        ],
        'sourcetree' => [
            "title"=>'SourceTree',
            "arg" => 'open -a /Applications/SourceTree.app',
            'icon' => [
                "path" => './icons/sourcetree.png',
            ],
            "keywords"=>'git',
        ],
        'firefox' => [
            "title"=>'Firefox',
            "arg" => 'open -a /Applications/Firefox.app',
            'icon' => [
                "path" => './icons/firefox.png',
            ],
            "keywords"=>'web browser',
        ],
        'chrome' => [
            "title"=>'Chrome',
            "arg" => 'open -a /Applications/Google\ Chrome.app',
            'icon' => [
                "path" => './icons/chrome.png',
            ],
            "keywords"=>'web browser',
        ],
        'phpstorm' => [
            "title"=>'PhpStorm',
            "arg" => 'open -a /Applications/PhpStorm.app',
            'icon' => [
                "path" => './icons/phpstorm.png',
            ],
            "keywords"=>'edit',
        ],
        'iterm' => [
            "title"=>'iTerm',
            "arg" => 'open -a /Applications/iTerm.app',
            'icon' => [
                "path" => './icons/iterm.png',
            ],
            "keywords"=>'console cmd ssh shell terminal',
        ],
        'vscode' => [
            "title"=>'Vscode',
            "arg" => '/usr/local/bin/code',
            'icon' => [
                "path" => './icons/vscode.png',
            ],
            "keywords"=>'edit',
        ],
        'atom' => [
            "title"=>'Atom',
            "arg" => '/usr/local/bin/atom',
            'icon' => [
                "path" => './icons/phpstorm.png',
            ],
            "keywords"=>'edit',
        ],
        'sublime' => [
            "title"=>'Sublime',
            "arg" => '/usr/local/bin/sublime',
            'icon' => [
                "path" => './icons/sublime.png',
            ],
            "keywords"=>'edit',
        ],
    ];
    if (isset($tools[$tooName])) {
        return $tools[$tooName];
    }
    return $tools['finder'];

}

function getAction($folder, $tool = "finder") {
    $toolCmd = getToolByName($tool);
    $toolCmd["arg"] .= ' ' . $folder;
    return $toolCmd;
}
