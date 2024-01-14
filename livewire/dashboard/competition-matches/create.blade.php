<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-12">
                <x-card.main title="اضافة مباراة">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.competition-matches.index', ['competition' => $competition]) }}"
                                class="btn btn-danger btn-sm" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        </div>
                    </div>

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4 mb-4">
                        @csrf

                        <x-form.group label="الفريق الاول" for="home" :error="$errors->first('home')">
                            <div class="row">
                                <x-form.select wire:model.defer="home" id="home" name="home" placeholder="الفريق الاول">
                                    <option value="">اختر الفريق</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </x-form.group>

                        <x-form.group label="الفريق الثاني" for="away" :error="$errors->first('away')">
                            <div class="row">
                                <x-form.select wire:model.defer="away" id="away" name="away"
                                    placeholder="الفريق الثاني">
                                    <option value="">اختر الفريق</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </x-form.group>

                        <x-form.group label="مكان المبارة" for="location" :error="$errors->first('location')">
                            <x-form.input type="text" wire:model.defer="location" id="location" name="location"
                                placeholder="مكان المبارة" />
                        </x-form.group>

                        <x-form.group label="تاريخ المبارة" for="date" :error="$errors->first('date')">
                            <x-form.input type="date" wire:model.defer="date" id="date"
                                name="date" placeholder="تاريخ المبارة" />
                        </x-form.group>

                        <x-form.group label="وقت المبارة المبارة" for="time" :error="$errors->first('time')">
                            <x-form.input type="time" wire:model.defer="time" id="time"
                                name="time" placeholder="تاريخ المبارة" />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">حفظ
                            المبارة</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</div>
