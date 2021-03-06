<?php

/**
 * Assembly Developer API PHP Client
 * SDK Version 1.2.475
 * API Version 1.1.0
 *
 * Support
 * Email: help@assembly.education
 * URL:   http://developers.assembly.education
 *
 * Terms of Service: http://assembly.education/terms/
 * License:          MIT, https://spdx.org/licenses/MIT.html
 */


namespace Assembly\Client\Auth;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\GenericResourceOwner;
use Psr\Http\Message\ResponseInterface;

class AssemblyAuth extends AbstractProvider
{
  use BearerAuthorizationTrait;

  protected $environment = 'sandbox';

  public function __construct(array $options = [], array $collaborators = [])
  {
    $options = array_merge($options, array_filter([
      'clientId'      => getenv('ASSEMBLY_CLIENT_ID'),    // The client ID assigned to you by the provider
      'clientSecret'  => getenv('ASSEMBLY_CLIENT_SECRET'),
      'environment'   => getenv('ASSEMBLY_ENVIRONMENT')
    ]));

    parent::__construct($options, $collaborators);
  }

  const sandboxPlatformURL    = 'https://platform-sandbox.assembly.education/';
  const productionPlatformURL = 'https://platform.assembly.education/';
  const sandboxApiURL         = 'https://api-sandbox.assembly.education/';
  const productionApiURL      = 'https://api.assembly.education/';

  public function getDefaultScopes()
  {
    return [ 'school:required' ];
  }

  public function getBaseAuthorizationUrl()
  {
    return $this->basePlatformUrl( 'oauth/authorize' );
  }

  public function getBaseAccessTokenUrl(array $params)
  {
    return $this->basePlatformUrl( 'oauth/token' );
  }

  public function getResourceOwnerDetailsUrl(AccessToken $token)
  {
    return $this->baseApiUrl( 'me' );
  }

  public function getScopeSeparator()
  {
    return ' ';
  }

  private function useSandbox()
  {
    return ( $this->environment != "production" );
  }

  private function basePlatformUrl( $path )
  {
    return ( $this->useSandbox()  ? self::sandboxPlatformURL : self::productionPlatformURL ) . $path;
  }

  public function baseApiUrl( $path = null)
  {
    return ( $this->useSandbox()  ? self::sandboxApiURL : self::productionApiURL ) . $path;
  }

  protected function createResourceOwner(array $response, AccessToken $token)
  {
    return new GenericResourceOwner($response, $token->getResourceOwnerId());
  }

  protected function checkResponse(ResponseInterface $response, $data)
  {
    if (!empty($data['error'])) {
      throw new IdentityProviderException($data['error'], $data['code'], $data);
    }
  }

  protected function getAccessTokenQuery(array $params)
  {
      return http_build_query($params, null, '&', \PHP_QUERY_RFC1738);
  }

  protected function getAuthorizationQuery(array $params)
  {
      return http_build_query($params, null, '&', \PHP_QUERY_RFC1738);
  }
}
