<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">اضافة رسالة</h4>

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf

                        <x-form.group label="الفرق" for="teams" :error="$errors->first('teams')">
                            <div class="row">

                               @foreach ($teamsList as $team)
                                    <div class="col-md-6">
                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="teams-{{ $team->id }}">
                                                <input class="form-check-input" wire:model="teams.{{ $team->id }}" name="teams[]" value="{{ $team->id }}" type="checkbox" id="teams-{{ $team->id }}" /> {{ $team->name }}
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                               @endforeach

                            </div>
                        </x-form.group>

                        <x-form.group label="العنوان" for="subject" :error="$errors->first('subject')">
                            <x-form.input type="text" wire:model.defer="subject" id="subject" name="subject" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group-upload name="file" label="ملف مرفق" :error="$errors->first('file')" placeholder="الرجاء اختيار الملف" />

                        <x-form.group label="الرسالة" for="body" :error="$errors->first('body')">
                            <livewire:trix />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال الرسالة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>