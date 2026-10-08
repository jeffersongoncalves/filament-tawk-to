---
name: filament-tawk-to-development
description: Build and work with the Filament Tawk.to plugin — settings page and script injection in Filament panels.
---

# Filament Tawk.to Development

## When to use this skill

- Adding or changing the Tawk.to integration of a Filament panel
- Customizing the Tawk.to settings page
- Debugging a missing Tawk.to script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-tawk-to` (branch `1.x`)
- **Namespace**: `JeffersonGoncalves\Filament\TawkTo`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-tawk-to:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\TawkTo\TawkToPlugin;

$panel->plugins([
    TawkToPlugin::make(),                        // settings page + script injection
    // TawkToPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=tawk-to-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `property_id` | TextInput |
| `widget_id` | TextInput |
| `identify_users` | Toggle |
| `only_when_open` | Toggle |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\TawkTo\Settings\TawkToSettings::class)->isConfigured()`.
- **Settings page errors**: the `tawk_to` settings group is missing — publish and run the migrations.
