<?php
/**
 * ILS (integrated library system) view helper
 *
 * PHP version 5
 *
 * Copyright (C) Villanova University 2010.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  View_Helpers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:developer_manual Wiki
 */
namespace VuFind\View\Helper\Root;

/**
 * ILS (integrated library system) view helper
 *
 * @category VuFind2
 * @package  View_Helpers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:developer_manual Wiki
 */
class Ils extends \Zend\View\Helper\AbstractHelper
{
    /**
     * ILS connection
     *
     * @var \VuFind\ILS\Connection
     */
    protected $connection;

    /**
     * Constructor
     *
     * @param \VuFind\ILS\Connection $connection ILS connection
     */
    public function __construct(\VuFind\ILS\Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Get the ILS connection object.
     *
     * @return \VuFind\ILS\Connection
     */
    public function __invoke()
    {
        return $this->connection;
    }
}