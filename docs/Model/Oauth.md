# Oauth

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Access token grants authorisation to school data (currently valid for a period of 1 day) | [optional] 
**refresh_token** | **string** | Refresh tokens should be used to aquire a new access token upon expiry of access tokens | [optional] 
**token_type** | **string** | Provides the client with the information to utilise the access token to make a resource request | [optional] 
**level** | **string** | Details whether the token gives access to application level resources or school data. | [optional] 
**expires_in** | **int** | The amount of time (in seconds) that the access token is valid for | [optional] 
**school_id** | **int** | Internal Platform ID for school that the token applies to | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


