<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(1)
                ->schema([
                Forms\Components\TextInput::make('url')
                ->label('Kode Url Youtube')
                ->helperText('contoh : 7lnor3k_B-U')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('judul')
                ->label('Judul')
                ->helperText('Masukan Judul')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('durasi_video')
                ->label('Durasi Video')
                ->helperText('contoh: 3 Menit')
                ->required()
                ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                ->rows(10)
                ->cols(20),

                Forms\Components\Select::make('tingkat_kesulitan')
                ->label('Tingkat Kesulitan')
                ->options([
                        'Mudah' => 'Mudah',
                        'Sedang' => 'Sedang',
                        'Sulit' => 'Sulit',
                    ])
                ->required(),

                Forms\Components\Toggle::make('is_active')
                ->label('Status Publikasi'),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('judul')
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
