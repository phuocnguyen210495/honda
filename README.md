TODO:

* [ ] Year, month, day, birthday input
* [ ] Time input
* [ ] Calendar
* [ ] Image upload field
* [ ] Middleware to set locale based on user's preferences + ?hl={lang}
* [ ] Empty state component
* [ ] File input component
* [ ] Masonry component
* [ ] Auth
* [ ] Make name attribute not required on inputs
* [ ] Rename components/buttons to components/button
* [ ] Make Buttons/Text, secondary extends Button
* [ ] Social component should allow to use the brand color as the icon color
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
