<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\TawkTo\Pages\ManageTawkToSettings;
use JeffersonGoncalves\Filament\TawkTo\TawkToPlugin;
use JeffersonGoncalves\TawkTo\Settings\TawkToSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageTawkToSettings::class)
        ->and(TawkToPlugin::make()->getId())->toBe('filament-tawk-to');
});

it('uses translated labels', function () {
    expect(ManageTawkToSettings::getNavigationLabel())->toBe('Tawk.to');

    app()->setLocale('pt_BR');

    expect((new ManageTawkToSettings)->getTitle())->toBe('Configurações do Tawk.to');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageTawkToSettings::class)
        ->fillForm(['property_id' => '0123456789abcdef01234567', 'widget_id' => 'default'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(TawkToSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(TawkToSettings::class)->refresh()->property_id)->toBe('0123456789abcdef01234567')
        ->and(app(TawkToSettings::class)->refresh()->widget_id)->toBe('default');
});

it('rejects an invalid value', function () {
    Livewire::test(ManageTawkToSettings::class)
        ->fillForm(['property_id' => 'x\'); alert(1); (\'', 'widget_id' => 'default'])
        ->call('save')
        ->assertHasFormErrors(['property_id']);
});

it('injects the Tawk.to script into the panel once configured', function () {
    $settings = app(TawkToSettings::class);
    $settings->property_id = '0123456789abcdef01234567';
    $settings->widget_id = 'default';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::BODY_END))->toContain('embed.tawk.to');
});
