<?php

// namespace App\Filament\Pages\Auth;

// use App\Models\User;
// use Filament\Forms;
// use Filament\Forms\Components\TextInput;
// use Filament\Pages\Page;
// use Illuminate\Support\Facades\Hash;

// class Register extends Page implements Forms\Contracts\HasForms
// {
//     use Forms\Concerns\InteractsWithForms;

//     // Remove the $view property completely in v3
//     protected string $view = 'filament.pages.auth.register';

//     public ?array $data = [];

//     protected function getFormSchema(): array
//     {
//         return [
//             TextInput::make('name')
//                 ->label('Name')
//                 ->required()
//                 ->maxLength(255),

//             TextInput::make('email')
//                 ->label('Email')
//                 ->email()
//                 ->required()
//                 ->unique(table: User::class, column: 'email'),

//             TextInput::make('phone')
//                 ->label('Phone Number')
//                 ->tel()
//                 ->required(),

//             TextInput::make('address')
//                 ->label('Address')
//                 ->required(),

//             TextInput::make('password')
//                 ->label('Password')
//                 ->password()
//                 ->required()
//                 ->confirmed(),

//             TextInput::make('password_confirmation')
//                 ->label('Confirm Password')
//                 ->password()
//                 ->required(),
//         ];
//     }

//     public function register()
//     {
//         $this->validate();

//         User::create([
//             'name' => $this->data['name'],
//             'email' => $this->data['email'],
//             'phone' => $this->data['phone'],
//             'profile' => $this->data['profile'],
//             'password' => Hash::make($this->data['password']),
//         ]);

//         session()->flash('success', 'Account created successfully.');
//     }
// }