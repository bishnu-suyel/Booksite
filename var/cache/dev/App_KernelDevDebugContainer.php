<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerApyyZ4t\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerApyyZ4t/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerApyyZ4t.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerApyyZ4t\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerApyyZ4t\App_KernelDevDebugContainer([
    'container.build_hash' => 'ApyyZ4t',
    'container.build_id' => '4a53b56f',
    'container.build_time' => 1722455608,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerApyyZ4t');
