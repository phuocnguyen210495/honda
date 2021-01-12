# Application-wide settings

Settings about the global state of your application are stored in `storage/app/settings.json`.

## What those settings should not be used for

* You shouldn't put any non-changing or non-related to your application state kind of data, like a list of countries, you should use a [Sushi](https://github.com/calebporzio/sushi) Model instead.
* You shouldn't put any fast-changing data like exchange rates, just use a model.

## What those settings should be used for

* You should put any rarely-changing data like any settings that change the website appearance or content.

## Usage

We use [spatie/valuestore](https://github.com/spatie/valuestore) under the hood. The Valuestore object is binded to the container as `settings` and `\Spatie\Valuestore\Valuestore`. 

### Usage in views

You can access any settings in views with the directive @setting

## CLI Usage

We provide some useful commands to configure the settings via the command line

### Get a value

`php artisan settings:get myKey` returns the value of myKey in `settings.json`

### Set a value

`php artisan setting:set foo bar` sets the value `bar` to the key `foo`

### List all values

`php artisan settings:list` outputs a table containing all the values and their associated key 
