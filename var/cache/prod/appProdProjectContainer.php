<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIxy0zvx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIxy0zvx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerIxy0zvx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerIxy0zvx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerIxy0zvx\appProdProjectContainer(array(
    'container.build_hash' => 'Ixy0zvx',
    'container.build_id' => '84164009',
    'container.build_time' => 1574702516,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIxy0zvx');
