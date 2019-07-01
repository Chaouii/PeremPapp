# Swagger\Server\Api\CredentialsApiInterface

All URIs are relative to *http://127.0.0.1:8000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCredential**](CredentialsApiInterface.md#createCredential) | **POST** /Credentials/ | Create new User and insert it in User collection
[**resetPassword**](CredentialsApiInterface.md#resetPassword) | **GET** /Credentials/reset | get the user account
[**userLogin**](CredentialsApiInterface.md#userLogin) | **GET** /Credentials | get the user account


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.credentials:
        class: Acme\MyBundle\Api\CredentialsApi
        tags:
            - { name: "swagger_server.api", api: "credentials" }
    # ...
```

## **createCredential**
> Swagger\Server\Model\CredentialPost createCredential($credentials)

Create new User and insert it in User collection

This operation allows to create and insert one instance of User in the Credentials collection.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CredentialsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CredentialsApiInterface;

class CredentialsApi implements CredentialsApiInterface
{

    // ...

    /**
     * Implementation of CredentialsApiInterface#createCredential
     */
    public function createCredential(CredentialPost $credentials)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**Swagger\Server\Model\CredentialPost**](../Model/CredentialPost.md)| All necessary informations required to create a new user |

### Return type

[**Swagger\Server\Model\CredentialPost**](../Model/CredentialPost.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **resetPassword**
> Swagger\Server\Model\CredentialPass resetPassword($mail)

get the user account

get the user password

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CredentialsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CredentialsApiInterface;

class CredentialsApi implements CredentialsApiInterface
{

    // ...

    /**
     * Implementation of CredentialsApiInterface#resetPassword
     */
    public function resetPassword($mail)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mail** | **string**| userMail |

### Return type

[**Swagger\Server\Model\CredentialPass**](../Model/CredentialPass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userLogin**
> Swagger\Server\Model\Credential userLogin($mail)

get the user account

get the user loggedIn

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CredentialsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CredentialsApiInterface;

class CredentialsApi implements CredentialsApiInterface
{

    // ...

    /**
     * Implementation of CredentialsApiInterface#userLogin
     */
    public function userLogin($mail)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mail** | **string**| userMail |

### Return type

[**Swagger\Server\Model\Credential**](../Model/Credential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

