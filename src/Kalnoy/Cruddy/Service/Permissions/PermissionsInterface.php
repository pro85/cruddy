<?php

namespace Kalnoy\Cruddy\Service\Permissions;

use Kalnoy\Cruddy\Entity;

/**
 * Permissions interface.
 */
interface PermissionsInterface {

    /**
     * Action for viewing an item.
     */
    const VIEW = 'view';

    /**
     * Action for creating new items.
     */
    const CREATE = 'create';

    /**
     * Action for updating items.
     */
    const UPDATE = 'update';

    /**
     * Action for deleting items.
     */
    const DELETE = 'delete';

    /**
     * Get whether a user is allowed to perform an action on entity.
     *
     * @param string               $action
     * @param \Kalnoy\Cruddy\Entity $entity
     *
     * @return bool
     */
    public function isPermitted($action, Entity $entity);
}