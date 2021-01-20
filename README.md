TODO:

* [ ] Every Inputs/* should extend Input and implement all the options, if it makes sense, otherwise an exception should be thrown.
* [ ] Year, month, day, birthday input
* [ ] Clock input, disabled time, enabled time
* [ ] Calendar
* [ ] Pin input [(inspiration here)](https://tailwindcomponents.com/component/pin-code-field)
* [ ] Toggle input [TUI ref](https://tailwindui.com/components/application-ui/forms/toggles)
* [ ] Image upload field
* [ ] Avatar with status (red, green, yellow) -- discord like
* [x] Colored dot (as a component x-dot color="" :shown="false")
* [x] Unique toggleable star (as a checkbox) (any icon customizable)
* [ ] Middleware to set locale based on user's preferences + ?hl={lang}

### Requirements

* PHP7.4

### Architecture

The boilerplate comes with a more flattened architecture, mostly in the `app/` directory.

### Naming convention

**Singular > Plural**

`ArticlesController` -> `ArticleController`
`EncryptCookies` -> `EncryptCookies`
> Sometimes, plural makes sense and it's okay to use it.

Models, controllers, directories, routes names should 99% of the time be singular.
And of the rest, it comes down to your intuition.

#### Guarded Models

All the models are unguarded by default, guarding models only makes sense if you use `$request->all()` and you should almost never do that.

### Tracking visitors

```bash
composer require stevebauman/location
```

Just enable the `TrackVisitors` middleware in `app/HttpKernel.php`.

You can also anonymize a visitor `$visitor->anonymize()`

#### User agent parsing
 
We recommend using [jenssegers/agent](https://github.com/jenssegers/agent)
