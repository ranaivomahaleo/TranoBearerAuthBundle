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

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Trano\BearerAuthBundle\Entity\BearerUser;

/**
 * @author     ranaivo.razakanirina@atety.com
 */
class BearerTokenAuthenticator extends AbstractGuardAuthenticator
{
    public function start(Request $request, AuthenticationException $authException = null)
    {
        // By default returns authentication required response.
        return new JsonResponse(
            ['Authentication required'],
            JsonResponse::HTTP_FORBIDDEN
        );
    }

    public function supports(Request $request)
    {
        // TODO: Implement supports() method.
        return true;
    }

    /**
     * This function returns the Bearer token if it exists
     * and return empty string if not.
     * @param Request $request
     * @return mixed|string
     */
    public function getCredentials(Request $request)
    {
        $authBearer = $request->headers->get('Authorization');

        if (!$authBearer) {
            return '';
        } // if
        $splittedAuthBearer = explode(' ', $authBearer);
        if (count($splittedAuthBearer) !== 2) {
            return '';
        } // if
        if ($splittedAuthBearer[1]) {
            return $splittedAuthBearer[1];
        } // if
        return '';
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        // By default return empty BearerUser
        return new BearerUser();
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // TODO: Implement checkCredentials() method.
        return true;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // TODO: Implement onAuthenticationFailure() method.
        $data = array(
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        );
        throw new AuthenticationCredentialsNotFoundException('');
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {
        // TODO: Implement onAuthenticationSuccess() method.
        return null;
    }

    public function supportsRememberMe()
    {
        // TODO: Implement supportsRememberMe() method.
        return false;
    }

}
