
<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Заказы';

    protected static ?string $modelLabel = 'Заказ';

    protected static ?string $pluralModelLabel = 'Заказы';

    protected static ?string $navigationGroup = 'Заказы';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Информация о клиенте')
                    ->schema([
                        Forms\Components\TextInput::make('client_name')
                            ->label('Имя клиента')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_email')
                            ->label('Email клиента')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_phone')
                            ->label('Телефон клиента')
                            ->tel()
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Информация о проекте')
                    ->schema([
                        Forms\Components\Select::make('service_type')
                            ->label('Тип услуги')
                            ->options(Order::getServiceTypes())
                            ->required(),
                        Forms\Components\TextInput::make('project_title')
                            ->label('Название проекта')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('project_description')
                            ->label('Описание проекта')
                            ->required()
                            ->rows(4),
                        Forms\Components\TextInput::make('budget')
                            ->label('Бюджет')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('timeline')
                            ->label('Временные рамки')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Управление заказом')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Статус')
                            ->options(Order::getStatuses())
                            ->required()
                            ->default('new'),
                        Forms\Components\Textarea::make('admin_notes')
                            ->label('Заметки администратора')
                            ->rows(3),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('client_name')
                    ->label('Клиент')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('client_email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('project_title')
                    ->label('Проект')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                Tables\Columns\BadgeColumn::make('service_type')
                    ->label('Услуга')
                    ->formatStateUsing(fn (string $state): string => Order::getServiceTypes()[$state] ?? $state)
                    ->colors([
                        'primary' => 'software',
                        'success' => 'mobile',
                        'warning' => 'web',
                        'info' => 'ai_bigdata',
                        'secondary' => 'support',
                        'gray' => 'consulting',
                    ]),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Статус')
                    ->formatStateUsing(fn (string $state): string => Order::getStatuses()[$state] ?? $state)
                    ->colors([
                        'gray' => 'new',
                        'warning' => 'in_review',
                        'success' => 'approved',
                        'primary' => 'in_progress',
                        'info' => 'completed',
                        'danger' => 'cancelled',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Статус')
                    ->options(Order::getStatuses()),
                Tables\Filters\SelectFilter::make('service_type')
                    ->label('Тип услуги')
                    ->options(Order::getServiceTypes()),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
