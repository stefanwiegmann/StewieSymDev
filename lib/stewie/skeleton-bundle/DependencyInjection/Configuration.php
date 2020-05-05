<?php

namespace Stewie\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('stewie_skeleton');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->integerNode('max_rows')
                    ->defaultValue(10)
                    ->end()
                ->scalarNode('from_email')
                    ->defaultValue('name@email.de')
                    ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
