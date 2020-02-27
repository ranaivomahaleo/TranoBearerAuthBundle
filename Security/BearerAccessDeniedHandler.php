<?php
/*
 * This file is part of the TranoUtilsBundle package.
 *
 * (c) atety <https://www.atety.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Trano\BearerAuthBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

/**
 * @author     ranaivo.razakanirina@atety.com
 */
class BearerAccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        // TODO: Implement handle() method.
    }
}
