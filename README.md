TODO:

* [ ] Calendar Year, month, day, birthday, time input
* [ ] Image upload field (see spatie/laravel-medialibrary something)
* [ ] Middleware to set locale based on user's preferences + ?hl={lang}
* [ ] File input
* [ ] Make name attribute not required on inputs
* [ ] Charts
* [ ] Tab Switch [Tab1|Tab2] [icon1|icon2]
* [ ] Smart search (all in one)
* [ ] Refactor classes to {{ $attributes->class() }}
* [ ] Quantity input focus is messed up
* [ ] Disabled cursor consistency ("not-allowed" or not pointing)
* [ ] mt-2 on input only if hideLabel = false 
* [ ] Provide french translations 
* [ ] Use a solid x icon on alerts
 
To finish:

* \<x-captcha>
* \<x-grid>
* \<x-horizontal-scroll-container>
* \<x-breadcrumb>
* \<x-avatars-stack>
* \<x-markdown-editor>
* \<x-sidebar>
* \<x-stats>
* \q<x-tabs>
* \<x-video>
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

### Reference

#### Inputs

* <x-checkbox />
* <x-input />
* <x-markdown-editor />
* <x-password />
* <x-quantity />
* <x-rating />
* <x-select />
* <x-toggle />
* <x-toggleable-icon />
* <x-value />
