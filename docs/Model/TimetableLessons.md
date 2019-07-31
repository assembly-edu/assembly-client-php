# TimetableLessons

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | Descriminator | [optional] [default to 'lesson']
**id** | **int** | Internal stable ID | [optional] 
**type** | **string** | The start date of the lesson | [optional] 
**group** | [**\Assembly\Client\Model\LessonGroup**](LessonGroup.md) |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the lesson | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the lesson | [optional] 
**supervisors** | [**\Assembly\Client\Model\TimetableSupervisors[]**](TimetableSupervisors.md) | The ID of a staff member who supervises a group and their role. | [optional] 
**rooms** | [**\Assembly\Client\Model\LessonRooms[]**](LessonRooms.md) | Provides details of the rooms that a lessons is assigned to | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


