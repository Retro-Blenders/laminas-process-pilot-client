# laminas-process-pilot-client
Integrates the process-pilot-client into your Laminas application

# Package Implementation Guide for Laminas Applications

This guide will walk you through the process of adding this package to your Laminas application.

## Steps

1. **Add the Package**
   Using the `composer` tool, add the package with the following command:
   ```bash
   composer require retro-blenders/laminas-process-pilot-client
   ```

2. **Enable the Module**
   Enable the module by adding it to your `modules.config.php` file:

   ```php
   <?php
   return [
       ...Existing Modules...,
       'ProcessPilot\Laminas\Client',
   ];
   ```
   
   This modul will autoregister itself into your application. As long the module is enabled and the settings are given.

3. **Configure **
   add your given information into you application settings in folder `config/autoload/` as `process-pilot.global.php`

   ```php
   return [
       'process-pilot'   => [
           'host'         => 'process-pilot.com',
           'project_hash' => '<your project hash>',
           'project_id'   => '<your project id',
           'enabled'      => true,
       ],
   ];
   ```

## Support

If you run into any issues or require further assistance, feel free to open an issue on this repository.  
