<?php

namespace App\Filament\Resources\Hospitals\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HospitalsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Hospital Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter hospital name'),

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->required()
                    ->tel()
                    ->maxLength(20)->placeholder('Enter phone number'),

                TextInput::make('email')
                    ->label('Email Address')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->placeholder('Enter email address'),
                
                Textarea::make('address')
                    ->label('Address')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull()
                    ->placeholder('Enter hospital address'),
            ])
            ->columns(2);
    }
}
