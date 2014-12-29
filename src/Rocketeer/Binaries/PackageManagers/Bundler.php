<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Binaries\PackageManagers;

use Rocketeer\Abstracts\AbstractPackageManager;

class Bundler extends AbstractPackageManager
{
    /**
     * The name of the manifest file to look for
     *
     * @type string
     */
    protected $manifest = 'Gemfile';

    /**
     * Get an array of default paths to look for
     *
     * @return string[]
     */
    protected function getKnownPaths()
    {
        return array(
            'bundle',
        );
    }

    /**
     * Get where dependencies are installed
     *
     * @return string|null
     */
    public function getDependenciesFolder()
    {
        return;
    }
}
