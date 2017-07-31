<?php

namespace GeoSocio\EntityAttacherBundle\DependencyInjection;

use GeoSocio\EntityAttacher\EntityAttacher;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class GeoSocioEntityAttacherExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('geosocio_entity_attacher.default_attacher', EntityAttacher::class)
            ->setArguments([
                new Reference('doctrine.orm.default_entity_manager'),
                new Reference('annotations.reader'),
            ]);

        $container->setAlias('geosocio_entity_attacher', 'geosocio_entity_attacher.default_attacher');
    }
}
