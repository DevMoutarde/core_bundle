<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace ADMC\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;


class ADMCCoreBundleExtension{
    
    public function load(array $configs, ContainerBuilder $container){
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__. '/../Ressources/config'));
        $loader->load('services.yml');
    }
}