<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQGv5sD\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQGv5sD/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYQGv5sD.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYQGv5sD\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerYQGv5sD\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'YQGv5sD',
    'container.build_id' => 'ea85ba65',
    'container.build_time' => 1528720611,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQGv5sD');