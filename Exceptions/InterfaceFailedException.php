<?php
/**
 * This file is part of CiRestClientBundle.
 *
 * CiRestClientBundle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * CiRestClientBundle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CiRestClientBundle.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Ci\RestClientBundle\Exceptions;

use Ci\RestClientBundle\Exceptions\Interfaces\DetailedExceptionInterface;

/**
 * Specific exception for curl requests
 *
 * Explanations given in function getDetailedMessage
 *
 * @author    Tobias Hauck <tobias.hauck@teeage-beatz.de>
 * @copyright 2015 TeeAge-Beatz UG
 */
class InterfaceFailedException extends CurlException implements DetailedExceptionInterface {

    /**
     * Sets all necessary dependencies
     *
     * @param string $message
     * @param int    $code
     */
    public function __construct(
        $message = 'Interface error',
        $code    = 45
    ) {
        parent::__construct($message, $code);
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function getDetailedMessage() {
        return 'Interface error. A specified outgoing interface could not be used. ' .
        'Set which interface to use for outgoing connections\' source IP address with CURLOPT_INTERFACE.';
    }
}