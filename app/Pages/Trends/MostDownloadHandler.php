<?php
declare(strict_types=1);

namespace App\Pages\Trends;

/**
 * PSR-4 handler for the trends download route.
 */
class MostDownloadHandler extends TrendsHandler
{
    /**
     * Display the download trends placeholder using the trends hub template.
     *
     * @param array $args
     * @param object|null $request
     * @return void
     */
    public function download(array $args = [], $request = null)
    {
        return $this->index($args, $request);
    }
}
