# Changelog

All notable changes to `filament-tawk-to` will be documented in this file.

## 3.1.0 - 2026-10-09

`Plugin::make()->navigationGroup(string|Closure)` puts the settings page in one of your panel's own navigation groups (requires filament-analytics-core 3.1). Without it the translated group is kept.

## 3.0.0 - 2026-10-08

First release for Filament 5.x.

Tawk.to for Filament on top of [laravel-tawk-to](https://github.com/jeffersongoncalves/laravel-tawk-to):

- Script injected at `PanelsRenderHook::BODY_END` once the settings are complete
- Settings page with validation
- `->settingsPage(false)` for injection only
- Translations in 19 languages
