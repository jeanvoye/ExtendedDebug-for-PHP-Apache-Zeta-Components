<?php
/**
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version //autogentag//
 * @filesource
 * @package Extended Debug
 * @subpackage Tests
 */

/**
 * Require the tests
 */
require_once 'extended_debug_dummy_test.php';

ezcBase::addClassRepository( dirname( __FILE__ ) . '/../', null, 'extendeddebug' );

/**
 * @package ExtendedDebug
 * @subpackage Tests
 */
class extendeddebugSuite extends PHPUnit_Framework_TestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName( "ExtendedDebug" );

        $this->addTest( extendeddebugDummyTest::suite() );
    }

    public static function suite()
    {
        return new extendeddebugSuite();
    }
}

// No class prefix other than the package name.
return '';

?>
