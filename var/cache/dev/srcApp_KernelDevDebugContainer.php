<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDhEJe0l\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDhEJe0l/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDhEJe0l.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDhEJe0l\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDhEJe0l\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DhEJe0l',
    'container.build_id' => 'efcc2102',
    'container.build_time' => 1585851183,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDhEJe0l');