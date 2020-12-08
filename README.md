### Requirements

* PHP7.4

### Architecture

The boilerplate comes with a more flattened architecture, mostly in the `app/` directory.

### Naming conditions

**Singular > Plural**

`ArticlesController` -> `ArticleController`
`EncryptCookies` -> `EncryptCookies`
> Sometimes, plural makes sense and it's okay to use it.

Models, controllers, directories, routes names should 99% of the time be singular.
And of the rest, it comes down to intuition.

#### Guarded Models

All the models are unguarded by default, guarding models only makes sense if you use `$request->all()` and you should never use that.

### Tracking visitors

```bash
composer require stevebauman/location
```

There's is a somewhat advanced tracking system but it's not here for you to use it unless **you're forced to**.
I want to make this very clear, you should not use that, but sometimes the client asks, and the client is king...

Just enable the `TrackVisitors` middleware in `app/HttpKernel.php`.

You can also anonymize a visitor `$visitor->anonymize()`

#### User agent parsing

We recommend using [jenssegers/agent](https://github.com/jenssegers/agent)
