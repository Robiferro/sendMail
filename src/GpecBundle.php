<?php
namespace Gpec\GpecBundle;


use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Gpec\GpecBundle\DependencyInjection\GpecBundleExtension;

/**
 * SecurityHeadersBundle
 */
class GpecBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new GpecBundleExtension();
        }

        return $this->extension;
    }
}