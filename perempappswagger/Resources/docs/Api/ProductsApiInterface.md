# Swagger\Server\Api\ProductsApiInterface

All URIs are relative to *http://127.0.0.1:8000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct**](ProductsApiInterface.md#createProduct) | **POST** /Products | Create new Products and insert it in Products collection
[**userProduct**](ProductsApiInterface.md#userProduct) | **GET** /Products/ | get the product of a user


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.products:
        class: Acme\MyBundle\Api\ProductsApi
        tags:
            - { name: "swagger_server.api", api: "products" }
    # ...
```

## **createProduct**
> Swagger\Server\Model\Products createProduct($products)

Create new Products and insert it in Products collection

This operation allows to create and insert one instance of Product in the Products collection. - name, category, PerempDate and UserId  are required

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductsApiInterface;

class ProductsApi implements ProductsApiInterface
{

    // ...

    /**
     * Implementation of ProductsApiInterface#createProduct
     */
    public function createProduct(Products $products)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **products** | [**Swagger\Server\Model\Products**](../Model/Products.md)| All necessary informations required to create a new Products:name, category, PerempDate and UserId |

### Return type

[**Swagger\Server\Model\Products**](../Model/Products.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userProduct**
> Swagger\Server\Model\Products userProduct($userId)

get the product of a user

get the user product peremped

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductsApiInterface;

class ProductsApi implements ProductsApiInterface
{

    // ...

    /**
     * Implementation of ProductsApiInterface#userProduct
     */
    public function userProduct($userId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| userId of product |

### Return type

[**Swagger\Server\Model\Products**](../Model/Products.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

