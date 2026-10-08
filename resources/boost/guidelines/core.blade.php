## Filament Tawk.to

Filament plugin for Tawk.to with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::BODY_END` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-tawk-to:"^2.0"
php artisan vendor:publish --tag=tawk-to-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\TawkTo\TawkToPlugin;

$panel->plugins([
    TawkToPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `TawkToPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageTawkToSettings` (disable with `->settingsPage(false)`)
- `TawkToServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `tawk-to::script` view from `jeffersongoncalves/laravel-tawk-to`
- `ManageTawkToSettings` is a `SettingsPage` bound to `JeffersonGoncalves\TawkTo\Settings\TawkToSettings`
- Translations live under `filament-tawk-to::pages.*`
