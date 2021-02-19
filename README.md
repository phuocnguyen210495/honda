TODO:

* [ ] Calendar Year, month, day, birthday, time input
* [ ] Charts
* [ ] Tab Switch [Tab1|Tab2] [icon1|icon2]
* [ ] Smart search (all in one)
 * [ ] Algolia search places [2.x]
 * Make it easy to add any command in the setup, override them : should go along with the laravel improved commands with directories matching our structure.
 * x-context-menu based on x-dropdown
* x-container ain't smart
* x-uploaded-file than can render or download a file (behavior configured using an attribute) 
* Set default border at gray-300
* use levenstein distance for searches.

To finish:

* \<x-breadcrumb>
* \<x-avatars-stack>
* \<x-markdown-editor>
* \<x-stats>
* \<x-tabs>

### Reference

#### Inputs

* \<x-checkbox />
* \<x-input />
* \<x-markdown-editor />
* \<x-password />
* \<x-quantity />
* \<x-rating />
* \<x-select />
* \<x-toggle />
* \<x-toggleable-icon />
* \<x-value />

### Naming convention
 
**Singular > Plural**

`ArticlesController` -> `ArticleController`
`EncryptCookies` -> `EncryptCookies`
> Sometimes, plural makes sense and it's okay to use it.

Models, controllers, directories, routes names should 99% of the time be singular.
And of the rest, it comes down to your intuition.
