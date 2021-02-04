TODO:

* [ ] Year, month, day, birthday input
* [ ] Time input
* [ ] Calendar
* [ ] Image upload field
* [ ] Middleware to set locale based on user's preferences + ?hl={lang}
* [ ] File input component
* [ ] Masonry component
* [ ] Make name attribute not required on inputs
* [ ] Charts
* [ ] Tab Switch [Tab1|Tab2] [icon1|icon2]
* [ ] Logout button
* [ ] Progress bar filled="30" total="400"
* [ ] Notification badge facebook like
* [ ] Smart search (all in one)
* [ ] Refactor classes to {{ $attributes->class() }}
* [ ] Make x-container without any max-width constraint by default
* [ ] Remove solid attribute on icons or just make it only for heroicons
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
