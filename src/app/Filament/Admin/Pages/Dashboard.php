<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.admin.pages.dashboard';
    public static ?string $title = 'Dashboard';
    public static ?string $slug = 'dashboard';
    public static ?string $routeName = 'filament.admin.pages.dashboard';
}
