<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use Filament\Forms\Contracts\HasForms;

use Filament\Forms\Concerns\InteractsWithForms;

use Filament\Forms\Form;

use Filament\Forms;


use Filament\Tables;

use Filament\Tables\Table;


use Filament\Support\Exceptions\Halt;

use App\Models\SystemSetting;

use Filament\Notifications\Notification;


class EditSystemSetting extends Page
{
    use InteractsWithForms;

    public ?array $data = [];

    public SystemsSetting $systemSetting;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.edit-system-setting';

    public function mounth(): void
    {
        //$this->forms->fill();

        //Retrieve the first or default system setting data
        $this->systemSetting = SystemSetting::firstOrNew([]);

        //dd(SystemSetting::first());
        //dd($this->systemSetting->attributeToArray());

        //prefill the form fields
        //$this->form->fill($this->systemSeting->toArray);

        //Map the model's attributes to the forms state
        $this->data = $this->systemSetting->toArray();
    }
    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('company_name')
                ->label('company Name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('email')
                ->email()
                ->required(),
            Forms\Components\TextInput::make('website')
                ->label('website')
                // ->url()
                ->required(),
            Forms\Components\TextInput::make('customer_care_no')
            ->label('customer care number')
            ->required(),
                
        ])
        ->statePath('data');
    }

    protected function getFormsAction(): array
    {
        return[
            Tables\Actions\Action::make('save')
                ->label(__('filament-panels::resource/pages/edit-record.form.action.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            //$data = $this->form->getState();

            //$this->systemSetting->fill($this->form->getState());
            $this->systemSetting->save();

            //$this->notify('success','system setting saved successfully');
        } catch (Halt $exception){

            return;
        }
        Notification::make()
        ->success()
        ->title(__('filament-panels::resource/pages/edit-record.notification.saved.title'))
        ->send();
    }
}
