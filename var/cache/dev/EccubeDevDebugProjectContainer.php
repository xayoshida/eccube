<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZz3wnfp\EccubeDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZz3wnfp/EccubeDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZz3wnfp.legacy');

    return;
}

if (!\class_exists(EccubeDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZz3wnfp\EccubeDevDebugProjectContainer::class, EccubeDevDebugProjectContainer::class, false);
}

return new \ContainerZz3wnfp\EccubeDevDebugProjectContainer([
    'container.build_hash' => 'Zz3wnfp',
    'container.build_id' => 'e4206af7',
    'container.build_time' => 1592977195,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZz3wnfp');
