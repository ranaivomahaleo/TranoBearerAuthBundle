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

namespace Trano\BearerAuthBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @author     ranaivo.razakanirina@atety.com
 */
class BearerUser implements UserInterface, \Serializable
{
    /**
     * @var string
     */
    private $username = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var array
     */
    private $roles = [];

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param string $username
     * @return BearerUser
     */
    public function setUsername(string $username): BearerUser
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param array $roles
     * @return BearerUser
     */
    public function setRoles(array $roles): BearerUser
    {
        $this->roles = $roles;
        return $this;
    }



    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }


    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


    public function serialize()
    {
        return serialize(
            [$this->username,
                $this->password,
                $this->roles]
        );
    }

    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->username = $data[0];
        $this->password = $data[1];
        $this->roles = $data[2];
    }

}
