<?php


namespace Starts\Banner;


use Illuminate\Support\Facades\Cache;
use Spatie\Browsershot\Browsershot;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Generator
{
    private string $title;
    private string $body;
    private int $width;
    private int $height;

    public function __construct(
        string $title,
        string $body,
        int $width,
        int $height
    )
    {
        $this->title = $title;
        $this->body = $body;
        $this->width = $width;
        $this->height = $height;
    }

    public static function make(
        string $title = null,
        string $body = null,
        int $width = null,
        int $height = null
    ): StreamedResponse
    {
        return (new static($title, $body, $width, $height))->downloadResponse();
    }

    public function downloadResponse(): StreamedResponse
    {
        return response()->stream(function () {
            echo $this->takeScreenshot();
        }, 200, [
            'Content-Type' => 'image/png'
        ]);
    }

    private function takeScreenshot(): string
    {
        $payload = json_encode([
            'title' => $this->title,
            'body' => $this->body,
            'file' => __DIR__ . '/../resources/views/render.blade.php' // TODO: Custom views wont get the right hash
        ], JSON_THROW_ON_ERROR);

        $cacheKey = base64_encode($payload);

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $screenshot = $this->configureBrowserShot(
            Browsershot::url(
                route('render-banner') . '?' . http_build_query([
                    'payload' => $payload
                ])
            )->windowSize($this->width, $this->height)
        )->screenshot();

        Cache::put(base64_encode($payload), $screenshot);

        return $screenshot;
    }

    public function configureBrowserShot(Browsershot $browserShot): Browsershot
    {
        return $browserShot->addChromiumArguments(app()->environment('local') ? [
            'ignore-certificate-errors'
        ] : [])
            ->setNodeBinary(config('banners.node'))
            ->setNpmBinary(config('banners.npm'))
            ->setNodeModulePath(config('banners.node_modules'))
            ->disableJavascript()
            ->waitUntilNetworkIdle()
            ->fullPage();
    }
}
