<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of ErrorAPI class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ErrorAPISpec extends ObjectBehavior
{
    /**
     * Array which contains error objects. It is the return type of methods of access-token.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\AccessTokenInterface>
     */
    private $response = ['items' => [
        [
            'error_id'    => 400,
            'description' => 'An malformed parameter was passed',
            'error_name'  => 'bad_parameter',
        ],
        [
            'error_id'    => 401,
            'description' => 'No access_token was passed',
            'error_name'  => 'access_token_required',
        ],
        [
            'error_id'    => 402,
            'description' => 'An access_token that is malformed, expired, or otherwise incorrect was passed',
            'error_name'  => 'invalid_access_token',
        ],
        [
            'error_id'    => 403,
            'description' => 'The access_token passed does not have sufficient permissions',
            'error_name'  => 'access_denied',
        ],
        [
            'error_id'    => 404,
            'description' => 'No matching method was found',
            'error_name'  => 'no_method',
        ],
        [
            'error_id'    => 405,
            'description' => 'No key was passed',
            'error_name'  => 'key_required',
        ],
        [
            'error_id'    => 406,
            'description' => 'Access token may have been leaked, it will be invalidated',
            'error_name'  => 'access_token_compromised',
        ],
        [
            'error_id'    => 407,
            'description' => 'A write operation was rejected',
            'error_name'  => 'write_failed',
        ],
        [
            'error_id'    => 409,
            'description' => 'A request identified by the given request_id has already been run',
            'error_name'  => 'duplicate_request',
        ],
        [
            'error_id'    => 500,
            'description' => 'An error was encountered while servicing this request, it has been recorded',
            'error_name'  => 'internal_error',
        ],
        [
            'error_id'    => 502,
            'description' => 'Some violation of the throttling or request quota contract was encountered',
            'error_name'  => 'throttle_violation',
        ],
        [
            'error_id'    => 503,
            'description' => 'The method, or the entire API, is temporarily unavailable',
            'error_name'  => 'temporarily_unavailable',
        ],
    ]];

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\ErrorAPI');
    }

    function it_gets_all_errors(Client $client)
    {
        $client->get('/errors', [])->shouldBeCalled()->willReturn($this->response);

        $this->getAll()->shouldBeArray();
    }
}
