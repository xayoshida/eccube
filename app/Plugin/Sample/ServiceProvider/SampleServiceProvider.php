<?php

namespace Plugin\Sample\ServiceProvider;

use Eccube\Common\Constant;
use Eccube\Form\Type\Front\EntryType;
use Plugin\Sample\Form\Extension\EntryTypeExtension;
use Plugin\Sample\Form\Type\Admin\CustomerRankType;
use Plugin\Sample\Form\Extension\CustomerTypeExtension;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

require_once(__DIR__.'/../log.php');

class SampleServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new CustomerRankType();

            return $types;
        }));

        // Form Extension
        $app['form.type.extensions'] = $app->share($app->extend('form.type.extensions',
            function ($extensions) use ($app) {
                $extensions[] = new CustomerTypeExtension($app);
                $extensions[] = new EntryTypeExtension($app);

                return $extensions;
            }));

        $app->extend('eccube.twig.block.templates', function($templates) {
            $templates[] = 'Sample/Resource/template/admin/Customer/edit.twig';
            return $templates;
        });
    }
}