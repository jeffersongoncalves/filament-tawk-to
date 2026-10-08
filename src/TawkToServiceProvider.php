<?php

namespace JeffersonGoncalves\Filament\TawkTo;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class TawkToServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-tawk-to';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::BODY_END => 'tawk-to::script',
        ];
    }
}
