<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTd6eoVb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTd6eoVb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTd6eoVb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTd6eoVb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTd6eoVb\App_KernelDevDebugContainer([
    'container.build_hash' => 'Td6eoVb',
    'container.build_id' => '04f92c11',
    'container.build_time' => 1738683541,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTd6eoVb');
