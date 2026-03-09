<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UsersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

            TextInput::make('name')
                ->required(),

            TextInput::make('email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true),

            TextInput::make('password')
                ->password()
                ->required(fn ($record) => $record === null)
                ->dehydrated(fn ($state) => filled($state)),

            Select::make('role')
                ->options([
                    'super_admin' => 'Super Admin',
                    'admin' => 'Admin',
                    'hospital_staff' => 'Hospital',
                    'donor' => 'Donor',
                ])
                ->default('Donor')
                ->required(),

            TextInput::make('phone')
                ->tel(),

            Select::make('hospital_id')
                ->relationship('hospital', 'name')
                ->nullable()
                ->searchable(),

            FileUpload::make('profile')
                ->image()
                ->directory('profiles')
                ->nullable(),

        ])
        ->columns(2);
    }
}
