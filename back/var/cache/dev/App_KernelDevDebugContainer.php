<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1la6aLx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1la6aLx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1la6aLx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1la6aLx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1la6aLx\App_KernelDevDebugContainer([
    'container.build_hash' => '1la6aLx',
    'container.build_id' => '1f542f1b',
    'container.build_time' => 1738845369,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container1la6aLx');
