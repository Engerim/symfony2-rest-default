<?php

namespace ACME\PROJECT\Bundle\MainBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 *
 * @author Alexander Miehe <alexander.miehe@gmail.com>
 */
class ACMEPROJECTMainExtension extends ConfigurableExtension
{
    /**
     * @param ContainerBuilder $container
     * @param string           $path
     */
    protected function loadServices(ContainerBuilder $container, $path)
    {
        $servicesPath = $path . '/../Resources/config/services';
        $loader       = new XmlFileLoader($container, new FileLocator($servicesPath));
        $finder       = new Finder();

        /** @var $file SplFileInfo */
        foreach ($finder->in($servicesPath)->files()->name('*.xml') as $file) {
            $loader->load($file->getRelativePathname());
        }
    }

    /**
     * Configures the passed container according to the merged configuration.
     *
     * @param array            $mergedConfig
     * @param ContainerBuilder $container
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $this->loadServices($container, __DIR__);
    }
}
