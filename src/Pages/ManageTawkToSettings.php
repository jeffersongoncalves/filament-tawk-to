<?php

namespace JeffersonGoncalves\Filament\TawkTo\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;
use JeffersonGoncalves\TawkTo\Settings\TawkToSettings;

class ManageTawkToSettings extends SettingsPage
{
    protected static string $settings = TawkToSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function getNavigationLabel(): string
    {
        return __('filament-tawk-to::pages.navigation_label');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-tawk-to') ?? __('filament-tawk-to::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-tawk-to::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-tawk-to::pages.sections.tawk_to.heading'))
                    ->description(__('filament-tawk-to::pages.sections.tawk_to.description'))
                    ->schema([
                        TextInput::make('property_id')
                            ->label(__('filament-tawk-to::pages.fields.property_id.label'))
                            ->helperText(__('filament-tawk-to::pages.fields.property_id.helper'))
                            ->placeholder('0123456789abcdef01234567')
                            ->regex('/^[a-f0-9]{24}$/i')
                            ->maxLength(24)
                            ->nullable(),
                        TextInput::make('widget_id')
                            ->label(__('filament-tawk-to::pages.fields.widget_id.label'))
                            ->helperText(__('filament-tawk-to::pages.fields.widget_id.helper'))
                            ->placeholder('default')
                            ->regex('/^[a-z0-9]+$/i')
                            ->maxLength(32)
                            ->required(),
                        Toggle::make('identify_users')
                            ->label(__('filament-tawk-to::pages.fields.identify_users.label'))
                            ->helperText(__('filament-tawk-to::pages.fields.identify_users.helper')),
                        Toggle::make('only_when_open')
                            ->label(__('filament-tawk-to::pages.fields.only_when_open.label'))
                            ->helperText(__('filament-tawk-to::pages.fields.only_when_open.helper')),
                    ]),
            ]);
    }
}
