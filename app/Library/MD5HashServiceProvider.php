<?php
/**
 * Created by PhpStorm.
 * User: itworld
 * Date: 1/8/16
 * Time: 9:28 AM
 */

class MD5HashServiceProvider extends Illuminate\Support\ServiceProvider {
/**
 * Register the service provider.
 *
 * @return void
 */
public function register() {
    $this->app['hash'] = $this->app->share(function () {
        return new MD5Hasher();
    });
}
/**
 * Get the services provided by the provider.
 *
 * @return array
 */
public function provides() {
    return array('hash');
 }
}