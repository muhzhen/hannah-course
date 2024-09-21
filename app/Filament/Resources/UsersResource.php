<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rawilk\FilamentPasswordInput\Password;
use Filament\Forms\Components\Grid;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(1)
                ->schema([
                 Forms\Components\TextInput::make('name')
                ->helperText('Masukan Nama Lengkap')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('email')
                ->helperText('Masukan email')
                ->email()
                ->required()
                ->maxLength(255),

                Forms\Components\Toggle::make('is_active')
                ->label('Status Aktif Pengguna'),

                Password::make('password')
                ->label('Password')
                ->required(fn (string $context): bool => $context === 'create') // Wajib saat create, opsional saat edit
                ->visible(fn (string $context): bool => $context === 'create'),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(User::withoutAdmins())
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
