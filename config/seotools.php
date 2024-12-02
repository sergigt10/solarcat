<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Un projecte escolar que pretén consolidar un model educatiu pensat per afavorir l'acompanyament respectuós de cada infant, per potenciar els aprenentatges.", // set false to total remove
            'separator'    => ', ',
            'keywords'     => ['Escola els 30 pasos'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Escola els 30 pasos', // set false to total remove
            'description' => "Un projecte escolar que pretén consolidar un model educatiu pensat per afavorir l'acompanyament respectuós de cada infant, per potenciar els aprenentatges.", // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Escola els 30 pasos',
            'locale'      => 'ca_CA',
            'images'      => ['https://www.solarcat.es/frontend/assets/images/about-2.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => "Un projecte escolar que pretén consolidar un model educatiu pensat per afavorir l'acompanyament respectuós de cada infant, per potenciar els aprenentatges.",
            'site'        => '',
            'creator'     => '',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Escola els 30 pasos', // set false to total remove
            'description' => "Un projecte escolar que pretén consolidar un model educatiu pensat per afavorir l'acompanyament respectuós de cada infant, per potenciar els aprenentatges.", // set false to total remove
            'url'         => 'https://www.solarcat.es', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://www.solarcat.es/frontend/assets/images/about-2.png'],
        ],
    ],
];
