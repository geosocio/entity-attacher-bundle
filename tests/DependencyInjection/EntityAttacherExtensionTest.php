<?php

namespace GeoSocio\Tests\EntityAttacherBundle\DependencyInjection;

use GeoSocio\EntityAttacherBundle\DependencyInjection\EntityAttacherExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use PHPUnit\Framework\TestCase;

class GeoSocioEntityAttacherExtensionTest extends TestCase
{
    public function testLoad()
    {
        $definition = $this->getMockBuilder(Definition::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();
        $container->expects($this->once())
            ->method('register')
            ->willReturn($definition);

        $extension = new EntityAttacherExtension();
        $extension->load([], $container);
    }
}
