<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRvMLQV8\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRvMLQV8/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRvMLQV8.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRvMLQV8\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRvMLQV8\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'RvMLQV8',
    'container.build_id' => '6f87fc84',
    'container.build_time' => 1528747013,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRvMLQV8');
