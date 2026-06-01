<?php
declare(strict_types=1);

namespace App\Pages\Trends;

/**
 * PSR-4 handler for the trends citation route.
 */
class MostCitedHandler extends TrendsHandler
{
    /**
     * Display the cited trends placeholder using the trends hub template.
     *
     * @param array $args
     * @param object|null $request
     * @return void
     */
    public function cited(array $args = [], $request = null)
    {
        return $this->index($args, $request);
    }
}
