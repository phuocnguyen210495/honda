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
* [ ] Smart search (all in one)
* [ ] Refactor classes to {{ $attributes->class() }}
* [ ] Quantity input focus is messed up
* [ ] Disabled cursor consistency ("not-allowed" or not pointing)
* [ ] mt-2 on input only if hideLabel = false 
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
