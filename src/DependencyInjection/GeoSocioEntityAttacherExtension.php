<?php

namespace GeoSocio\EntityAttacherBundle\DependencyInjection;

use GeoSocio\EntityAttacher\EntityAttacher;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class GeoSocioEntityAttacherExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('entity_attacher.default_attacher', EntityAttacher::class)
            ->setArguments([
                '@doctrine.orm.default_entity_manager',
                '@annotations.reader',
            ]);

        $container->setAlias('entity_attacher', 'entity_attacher.default_attacher');
    }
}
