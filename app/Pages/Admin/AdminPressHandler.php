<?php
declare(strict_types=1);

namespace App\Pages\Admin;

/**
 * PSR-4 compatibility handler for legacy press-management routes.
 */
class AdminPressHandler extends AdminJournalHandler
{
    /**
     * Display the hosted press list using the journal management implementation.
     */
    public function presses()
    {
        return $this->journals();
    }

    /**
     * Display the create-press form.
     */
    public function createPress()
    {
        return $this->createJournal();
    }

    /**
     * Display the edit-press form.
     *
     * @param array $args
     */
    public function editPress($args = [])
    {
        return $this->editJournal($args);
    }

    /**
     * Save press changes.
     *
     * @param array $args
     * @param object|null $request
     */
    public function updatePress($args = [], $request = null)
    {
        return $this->updateJournal($args, $request);
    }

    /**
     * Delete a press.
     *
     * @param array $args
     * @param object|null $request
     */
    public function deletePress($args = [], $request = null)
    {
        return $this->deleteJournal($args, $request);
    }

    /**
     * Move a press in the hosted press list.
     *
     * @param array $args
     * @param object|null $request
     */
    public function movePress($args = [], $request = null)
    {
        return $this->moveJournal($args, $request);
    }
}
