<?php
/**
 * This file is part of SebastianFeldmann\Git.
 *
 * (c) Sebastian Feldmann <sf@sebastian-feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianFeldmann\Git\Command\DiffIndex;

use SebastianFeldmann\Git\Command\Base;

/**
 * Class GetStagedFiles
 *
 * @package SebastianFeldmann\Git
 */
class GetStagedFiles extends Base
{
    /**
     * Return the command to execute.
     *
     * @return string
     * @throws \RuntimeException
     */
    protected function getGitCommand() : string
    {
        return 'diff-index --cached --name-status HEAD';
    }
}
