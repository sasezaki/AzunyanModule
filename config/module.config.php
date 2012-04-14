<?php
return array(
    'di' => array(
        'definition' => array(
            'class' => array(
                'Zend\Cache\Storage\Adapter' => array(
                    'instantiator' => array(
                        'Zend\Cache\StorageFactory',
                        'factory'
                    ),
                ),
                'Zend\Cache\StorageFactory' => array(
                    'methods' => array(
                        'factory' => array('cfg' => array('required' => true, 'type' => false))
                    ),
                ),
            ),
        ),
        'instance' => array(
            'alias' => array(
                'cache' => 'Zend\Cache\Storage\Adapter',
                'scraper' => 'Diggin\Scraper\Scraper',
                'wedata-storage' => 'Diggin\Service\Wedata\Storage\Cache'
            ),
            'cache' => array(
                'parameters' => array('cfg' => array(
                    'adapter' => 'Memory'
                ))
            )
        )
    ),
);
/**
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'skeleton' => 'AzunyanModule\Controller\SkeletonController',
            ),
            'Zend\View\Resolver\TemplatePathStack' => array(
                'parameters' => array(
                    'paths'  => array(
                        'AzunyanModule' => __DIR__ . '/../view',
                    ),
                ),
            ),
        ),
    ),
);*/
