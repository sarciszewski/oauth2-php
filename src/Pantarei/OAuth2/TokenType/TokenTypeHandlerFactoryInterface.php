<?php

/**
 * This file is part of the pantarei/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\OAuth2\TokenType;

/**
 * OAuth2 token type handler factory interface.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
interface TokenTypeHandlerFactoryInterface
{
    /**
     * Adds a token type handler.
     *
     * @param string $type
     *   Type of token type handler, as refer to RFC6749.
     * @param GrantTypeHandlerInterface $handler
     *   A token type handler instance.
     */
    public function addTokenTypeHandler($type, TokenTypeHandlerInterface $handler);

    /**
     * Gets a stored token type handler.
     *
     * @param string $type
     *   Type of token type handler, as refer to RFC6749.
     *
     * @return GrantTypeHandlerInterface
     *   The stored token type handler.
     *
     * @throw UnsupportedGrantTypeException
     *   If supplied token type not found.
     */
    public function getTokenTypeHandler($type = null);

    /**
     * Removes a stored token type handler.
     *
     * @param string $type
     *   Type of token type handler, as refer to RFC6749.
     */
    public function removeTokenTypeHandler($type);
}
