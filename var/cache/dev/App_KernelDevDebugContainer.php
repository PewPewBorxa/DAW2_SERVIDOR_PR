<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAQBzhgg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAQBzhgg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAQBzhgg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAQBzhgg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAQBzhgg\App_KernelDevDebugContainer([
    'container.build_hash' => 'AQBzhgg',
    'container.build_id' => 'c410be56',
    'container.build_time' => 1607439128,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAQBzhgg');
