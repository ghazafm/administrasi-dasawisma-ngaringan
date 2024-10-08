<?php

namespace App\Filament\Dasawisma\Resources;

use App\Filament\Dasawisma\Resources\KelahiranResource\Pages;
use App\Filament\Dasawisma\Resources\KelahiranResource\RelationManagers;
use App\Models\Kelahiran;
use App\Models\Kehamilan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelahiranResource extends Resource
{
    protected static ?string $model = Kelahiran::class;

    protected static ?string $label = 'Kelahiran';

    protected static ?string $pluralLabel = 'Kelahiran';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kelahiran & Kematian';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_kehamilan')
                    ->label('Nama Ayah')
                    ->options(Kehamilan::pluck('nama_suami', 'id_kehamilan'))
                    ->searchable()
                    ->required()
                    ->reactive()
                    ->native(false),
                Forms\Components\TextInput::make('nama_bayi')
                    ->label('Nama Bayi')
                    ->required()
                    ->maxLength(100),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\Toggle::make('akta_kelahiran')
                    ->label('Akta Kelahiran')
                    ->required(),
                Forms\Components\Select::make('kelamin')
                    ->required()
                    ->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ])
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kehamilan.ibu.nama')
                    ->label('Nama Ibu')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kehamilan.nama_suami')
                    ->label('Nama Ayah')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_bayi')
                    ->label('Nama Bayi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('akta_kelahiran')
                    ->label('Akta Kelahiran')
                    ->boolean(),
                Tables\Columns\TextColumn::make('kelamin')
                    ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('updated_at', 'desc') // Mengurutkan berdasarkan kolom created_at secara menurun
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->requiresConfirmation(),
                ])
                    ->label('Opsi Lain'),
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
            'index' => Pages\ListKelahirans::route('/'),
            'create' => Pages\CreateKelahiran::route('/create'),
            'view' => Pages\ViewKelahiran::route('/{record}'),
            'edit' => Pages\EditKelahiran::route('/{record}/edit'),
        ];
    }
}
