<?php

namespace JeffersonGoncalves\Filament\TawkTo;

use JeffersonGoncalves\Filament\TawkTo\Pages\ManageTawkToSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class TawkToPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-tawk-to';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageTawkToSettings::class;
    }
}
