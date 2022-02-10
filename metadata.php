<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'           => 'oe_mmtest',
    'title'        => 'Test metadata controllers feature',
    'description'  => '',
    'thumbnail'    => 'picture.png',
    'version'      => '2.1',
    'author'       => 'OXID eSales AG',
//    'controllers'  => [
//        'myvendor_mytestmodule_MyModuleController' => MyVendor\mytestmodule\MyModuleController::class,
//        'myvendor_mytestmodule_MyOtherModuleController' => MyVendor\mytestmodule\MyOtherModuleController::class,
//    ],
    'blocks' => [
        [
            //'theme' => 'flow',
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_title',
            'file' => '/views/blocks/productmain.tpl'
        ],
    ]
//    'templates' => [
//        'mytestmodule.tpl' => 'mytestmodule/mytestmodule.tpl',
//        'mytestmodule_other.tpl' => 'mytestmodule/test_module_controller_routing_other.tpl'
//    ],
//    'smartyPluginDirectories' => [
//        'Smarty/PluginDirectory'
//    ],
];