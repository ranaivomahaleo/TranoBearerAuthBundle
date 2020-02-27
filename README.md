# TranoBearerAuthBundle  

This bundle provides base classes for Bearer Token Authentication.
It includes:

- ```Trano\BearerAuthBundle\Entity\BearerUser``` class
- ```Trano\BearerAuthBundle\Security\BearerTokenAuthenticator``` class
- ```Trano\BearerAuthBundle\Security\BearerUserProvider``` class
- ```Trano\BearerAuthBundle\Security\BearerAccessDeniedHandler``` class

Installation  
------------  
Install with composer using

    composer require trano/tranobearerauthbundle

Usage  
-----

- Create a custom Authenticator class (App\Security\CustomAuthenticator) that inherits `
from ```Trano\BearerAuthBundle\Security\BearerTokenAuthenticator``` class.

- Update security.yaml file and set security configurations (firewalls) using the classes provided by this bundle.

License  
-------  
This bundle is under the MIT license. See the complete license [in the bundle](LICENSE).  
  
About us  
--------  
ABSUtilsBundle is an initiative of [atety][1].  
  
[1]: https://www.atety.com


