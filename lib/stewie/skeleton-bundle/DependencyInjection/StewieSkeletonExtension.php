<?php

namespace Stewie\SkeletonBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
// use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class StewieSkeletonExtension extends Extension
{

    public function getNamespace()
    {
        return 'http://stewie.com/schema/dic/skeleton';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        // define parameters
        $container->setParameter('stewie_skeleton.max_rows', $config['max_rows']);
        $container->setParameter('stewie_skeleton.from_email', $config['from_email']);

        // load services
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('commands.xml');
    }
}
