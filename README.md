# SUPLA-API-CLIENT for PHP

[![Latest Release](https://img.shields.io/github/release/SUPLA/api-client-php.svg)](https://github.com/SUPLA/api-client-php/releases/latest)
[![Build Status](https://travis-ci.org/SUPLA/api-client-php.svg?branch=master)](https://travis-ci.org/SUPLA/supla-cloud)
[![Packagist Downloads](https://img.shields.io/packagist/dt/SUPLA/api-client.svg)](https://packagist.org/packages/supla/api-client)

Your home connected. www.supla.org

# Installation

Install with [Composer](https://getcomposer.org/).

```
composer require supla/api-client
```

# Configuration

Get the API configuration values from the SUPLA-CLOUD you use.
You can find them on the *RESTFUL API* page after enabling it.

![](img/restful-api-cloud.jpg)

Then create an instance of a client in your code.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$client = new \Supla\ApiClient\SuplaApiClient([
    'server' => 'svrX.supla.org',
    'clientId' => 'YOUR_CLIENT_ID',
    'secret' => 'YOUR_SECRET',
    'username' => 'YOUR_USERNAME',
    'password' => 'YOUR_PASSWORD',
]);
```

## Requirements

PHP 5.5 and later

## Documentation for API Endpoints

All URIs are relative to *https://cloud.supla.org/api/v2.2.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessIDsApi* | [**createAccessID**](docs/Api/AccessIDsApi.md#createaccessid) | **POST** /accessids | Create a new Access ID
*AccessIDsApi* | [**deleteAccessID**](docs/Api/AccessIDsApi.md#deleteaccessid) | **DELETE** /accessids/{id} | Delete Access Identifier
*AccessIDsApi* | [**getAccessID**](docs/Api/AccessIDsApi.md#getaccessid) | **GET** /accessids | Get Access IDs list
*AccessIDsApi* | [**getAccessID_0**](docs/Api/AccessIDsApi.md#getaccessid_0) | **GET** /accessids/{id} | Get Access ID
*AccessIDsApi* | [**updateAccessID**](docs/Api/AccessIDsApi.md#updateaccessid) | **PUT** /accessids/{id} | Edit Access ID
*ChannelGroupsApi* | [**createChannelGroup**](docs/Api/ChannelGroupsApi.md#createchannelgroup) | **POST** /channel-groups | Create a new channel group
*ChannelGroupsApi* | [**deleteChannelGroup**](docs/Api/ChannelGroupsApi.md#deletechannelgroup) | **DELETE** /channel-groups/{id} | Delete Channel Group
*ChannelGroupsApi* | [**executeChannelGroupAction**](docs/Api/ChannelGroupsApi.md#executechannelgroupaction) | **PATCH** /channel-groups/{id} | Execute action on the channel group
*ChannelGroupsApi* | [**getChannelGroup**](docs/Api/ChannelGroupsApi.md#getchannelgroup) | **GET** /channel-groups/{id} | Get channel group by ID
*ChannelGroupsApi* | [**getChannelGroups**](docs/Api/ChannelGroupsApi.md#getchannelgroups) | **GET** /channel-groups | Get channels list
*ChannelGroupsApi* | [**updateChannelGroup**](docs/Api/ChannelGroupsApi.md#updatechannelgroup) | **PUT** /channel-groups/{id} | Update channel group
*ChannelsApi* | [**executeAction**](docs/Api/ChannelsApi.md#executeaction) | **PATCH** /channels/{id} | Execute action on the channel
*ChannelsApi* | [**getChannel**](docs/Api/ChannelsApi.md#getchannel) | **GET** /channels/{id} | Get channel by ID
*ChannelsApi* | [**getChannelMeasurementLogs**](docs/Api/ChannelsApi.md#getchannelmeasurementlogs) | **GET** /channels/{id}/measurement-logs | Get measurement logs.
*ChannelsApi* | [**getChannelMeasurementLogsCsvFile**](docs/Api/ChannelsApi.md#getchannelmeasurementlogscsvfile) | **GET** /channels/{id}/measurement-logs-csv | Get measurement logs as zipped CSV file.
*ChannelsApi* | [**getChannelSchedules**](docs/Api/ChannelsApi.md#getchannelschedules) | **GET** /channels/{id}/schedules | Get schedules list of the channel
*ChannelsApi* | [**getChannels**](docs/Api/ChannelsApi.md#getchannels) | **GET** /channels | Get channels list
*ChannelsApi* | [**updateChannel**](docs/Api/ChannelsApi.md#updatechannel) | **PUT** /channels/{id} | Update channel
*ClientAppsApi* | [**deleteClientApp**](docs/Api/ClientAppsApi.md#deleteclientapp) | **DELETE** /client-apps/{id} | Delete Client App
*ClientAppsApi* | [**getClientApps**](docs/Api/ClientAppsApi.md#getclientapps) | **GET** /client-apps | Get client apps
*ClientAppsApi* | [**updateClientApp**](docs/Api/ClientAppsApi.md#updateclientapp) | **PUT** /client-apps/{id} | Update client app
*IODevicesApi* | [**deleteIoDevice**](docs/Api/IODevicesApi.md#deleteiodevice) | **DELETE** /iodevices/{id} | Delete IO Device
*IODevicesApi* | [**getIoDevice**](docs/Api/IODevicesApi.md#getiodevice) | **GET** /iodevices/{id} | Get IO Device
*IODevicesApi* | [**getIoDeviceChannels**](docs/Api/IODevicesApi.md#getiodevicechannels) | **GET** /iodevices/{id}/channels | Get Channels that belong to IO Deice
*IODevicesApi* | [**getIoDevices**](docs/Api/IODevicesApi.md#getiodevices) | **GET** /iodevices | Get IO Devices
*IODevicesApi* | [**updateIoDevice**](docs/Api/IODevicesApi.md#updateiodevice) | **PUT** /iodevices/{id} | Update IO Device
*LocationsApi* | [**createLocation**](docs/Api/LocationsApi.md#createlocation) | **POST** /locations | Create a new location
*LocationsApi* | [**deleteLocation**](docs/Api/LocationsApi.md#deletelocation) | **DELETE** /locations/{id} | Delete location
*LocationsApi* | [**getLocation**](docs/Api/LocationsApi.md#getlocation) | **GET** /locations/{id} | Get location by ID
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Get locations list
*LocationsApi* | [**updateLocation**](docs/Api/LocationsApi.md#updatelocation) | **PUT** /locations/{id} | Edit location
*SchedulesApi* | [**createSchedule**](docs/Api/SchedulesApi.md#createschedule) | **POST** /schedules | Create a new schedule
*SchedulesApi* | [**deleteSchedule**](docs/Api/SchedulesApi.md#deleteschedule) | **DELETE** /schedules/{id} | Delete Schedule
*SchedulesApi* | [**enableSchedules**](docs/Api/SchedulesApi.md#enableschedules) | **PATCH** /schedules | Enable schedules
*SchedulesApi* | [**getSchedule**](docs/Api/SchedulesApi.md#getschedule) | **GET** /schedules/{id} | Get Schedule
*SchedulesApi* | [**getSchedules**](docs/Api/SchedulesApi.md#getschedules) | **GET** /schedules | Get schedules list
*SchedulesApi* | [**updateSchedule**](docs/Api/SchedulesApi.md#updateschedule) | **PUT** /schedules/{id} | Update schedule
*ServerApi* | [**serverInfoGet**](docs/Api/ServerApi.md#serverinfoget) | **GET** /server-info | Get server status
*ServerApi* | [**serverStatusGet**](docs/Api/ServerApi.md#serverstatusget) | **GET** /server-status | Get the SUPLA Server status
*UsersApi* | [**editCurrentUser**](docs/Api/UsersApi.md#editcurrentuser) | **PATCH** /users/current | Edit current user
*UsersApi* | [**getCurrentUser**](docs/Api/UsersApi.md#getcurrentuser) | **GET** /users/current | Get current user


## Documentation For Models

 - [AccessID](docs/Model/AccessID.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [Channel](docs/Model/Channel.md)
 - [ChannelFunction](docs/Model/ChannelFunction.md)
 - [ChannelFunctionAction](docs/Model/ChannelFunctionAction.md)
 - [ChannelFunctionActionEnum](docs/Model/ChannelFunctionActionEnum.md)
 - [ChannelFunctionEnumNames](docs/Model/ChannelFunctionEnumNames.md)
 - [ChannelGroup](docs/Model/ChannelGroup.md)
 - [ChannelParam](docs/Model/ChannelParam.md)
 - [ChannelType](docs/Model/ChannelType.md)
 - [ClientApp](docs/Model/ClientApp.md)
 - [Device](docs/Model/Device.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse200Timezone](docs/Model/InlineResponse200Timezone.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse4001](docs/Model/InlineResponse4001.md)
 - [InlineResponse409](docs/Model/InlineResponse409.md)
 - [InlineResponse503](docs/Model/InlineResponse503.md)
 - [Location](docs/Model/Location.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScheduleClosestExecutions](docs/Model/ScheduleClosestExecutions.md)
 - [ScheduleFuture](docs/Model/ScheduleFuture.md)
 - [SchedulePast](docs/Model/SchedulePast.md)
 - [ScheduleRequest](docs/Model/ScheduleRequest.md)
 - [ScheduleResult](docs/Model/ScheduleResult.md)
 - [UserRequest](docs/Model/UserRequest.md)


## Documentation For Authorization


## password

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **restapi**: full API access

