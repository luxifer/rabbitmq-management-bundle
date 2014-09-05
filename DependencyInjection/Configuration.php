<?php

namespace Luxifer\RabbitmqManagementBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('luxifer_rabbitmq_management');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('base_url')->defaultValue('http://localhost:15672')->end()
                ->scalarNode('username')->defaultValue('guest')->end()
                ->scalarNode('password')->defaultValue('guest')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
