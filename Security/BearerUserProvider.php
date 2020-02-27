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

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Trano\BearerAuthBundle\Entity\BearerUser;

/**
 * @author     ranaivo.razakanirina@atety.com
 */

class BearerUserProvider implements UserProviderInterface
{
    public function loadUserByUsername(string $username)
    {
        return new BearerUser();
    }

    public function refreshUser(UserInterface $user)
    {
        return new BearerUser();
    }

    public function supportsClass(string $class)
    {
        return BearerUser::class === $class;
    }

}
