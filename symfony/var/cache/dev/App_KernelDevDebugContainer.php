<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJaNtGQk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJaNtGQk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJaNtGQk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJaNtGQk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJaNtGQk\App_KernelDevDebugContainer([
    'container.build_hash' => 'JaNtGQk',
    'container.build_id' => '44c9dddd',
    'container.build_time' => 1639494901,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJaNtGQk');
