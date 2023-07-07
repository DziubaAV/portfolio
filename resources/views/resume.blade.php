@extends("layouts.app")
@section('title-block')

Резюме

@endsection
@section('content')

<section class="resume" id="resume">
<div class="resume_wrapper" id="PDFresume">

<!-- Левая сторона -->
<div class="resume_left">

<!-- Главная аватарка -->
<div class="resume_image">
<img src="{{ asset('img\resume.png')}}" alt="Resume_image">
</div>
<div class="resume_bottom">
@foreach ($resumes as $resume)
<div class="resume_item resume_namerole">
<div class="resume_name">{{ __('resume.resume_name', ['name' => $resume->user_name]) }}</div>
@endforeach
</div>

<!-- Профиль -->
<div class="resume_item resume_profile">
<div class="resume_title_localization">
<div class="resume_title"><span>{{__('resume.Профиль')}}</span></div>
<div class="localization">
<a href="#" class="gradient-button" id="dl-pdf" title="Скачать">PDF</a>
<a href="{{ route('locale', ['locale' => 'ru']) }}" title="Русский" class="{{ app()->getLocale() == 'ru' ? 'active' : '' }}">RU</a>
/
<a href="{{ route('locale', ['locale' => 'en']) }}" title="English" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
</div>
</div>			
<!-- <div class="resume_info"> Текст</div> -->
</div>

<!-- Адрес -->
<div class="resume_item resume_address">
<div class="resume_title"><span>{{__('resume.Адрес')}}</span></div>
@foreach ($resumes as $resume)
<div class="resume_info">
{{ __('resume.address', ['name' => $resume->address]) }}
</div>
@endforeach
</div>

<!-- Контакты -->
<div class="resume_item resume_contact">
<div class="resume_title"><span>{{__('resume.Контакты')}}</span></div>
<div class="resume_info">
@foreach ($resumes as $resume)
<div class="resume_subtitle"></div>
<div class="resume_subinfo">{{__('resume.Телефон')}}: <a href="tel:{{ $resume->phone }}">{{ $resume->phone }}</a></div>
</div>
<div class="resume_info">
<div class="resume_subtitle"></div>
<div class="resume_subinfo">Email: <a href="mailto:{{ $resume->email }}" target="_blank">{{ $resume->email }}</a></div> 
</div>
<div class="resume_info">
<div class="resume_subinfo"><a href="{{ $resume->social_media }}" title="Linkedin" target="_blank">Linkedin</a></div>
</div>
@endforeach
</div>

<!-- Навыки -->
@foreach ($resumes as $resume)
    @php
        $skills = explode(',', $resume->skills);
        $skillLevels = explode(',', $resume->skills_lvl);
        $translatedSkillLevels = [];
        
        foreach ($skillLevels as $level) {
            $translatedLevel = trans('resume.'.$level); // Переводим каждый уровень навыка
            $translatedSkillLevels[] = $translatedLevel; // Добавляем переведенный уровень в массив
        }
    @endphp
    <div class="resume_item resume_skills">
        <div class="resume_title"><span>{{ trans('resume.Навыки') }}</span></div>
        <div class="resume_info">
            @foreach ($skills as $index => $skill)
                <div class="resume_skills_list">
                    <div class="resume_skills_left">{{ $skill }}</div>
                    <p><span style="color: white">{{ trans($translatedSkillLevels[$index]) }}</span></p>
                </div>
            @endforeach
        </div>
    </div>
@endforeach

<!-- Языки -->
<div class="resume_item resume_skills">
    <div class="resume_title"><span>{{ __('resume.Языки') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $languages = explode(',', $resume->languages);
                $languagesLevels = explode(',', $resume->languages_lvl);
            @endphp
            @foreach ($languages as $index => $language)
                <div class="resume_skills_list">
                    <div class="resume_skills_left">{{ trans('resume.'.$language) }}</div>
                    <p><span style="color: white">{{ __('resume.'.$languagesLevels[$index]) }}</span></p>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<!-- Качества -->
<div class="resume_item resume_qualities">
    <div class="resume_title"><span>{{ __('resume.Качества') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $qualities = explode(',', $resume->qualities);
            @endphp
            @foreach ($qualities as $quality)
                <div class="resume_skills_list">
                    <div class="resume_skills_left">{{ trans('resume.'.$quality) }}</div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

</div>
</div>

<!-- Правая сторона -->
<div class="resume_right">
@foreach ($resumes as $resume)
<div class="resume_item resume_namerole">
<div class="resume_name">{{ __('resume.resume_name', ['name' => $resume->user_name]) }}</div>
@endforeach
</div>

<!-- Образование -->
<div class="resume_item resume_education">
    <div class="resume_title"><span>{{ __('resume.Образование') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $educat = explode(',', $resume->education);
                $specializat = explode(',', $resume->specialization);
                $educat_date = explode(',', $resume->education_date);
            @endphp
            @foreach ($educat as $index => $education)
                <div class="resume_data">
                    <div class="resume_year">{{ $educat_date[$index] }}</div>
                    <div class="resume_content">
                        <p>{{ trans('resume.'.$education) }}</p>
                        <p>{{ trans('resume.'.$specializat[$index]) }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<!-- Опыт работы -->
<div class="resume_item resume_experience">
    <div class="resume_title"><span>{{ __('resume.Опыт работы') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $exper = explode(',', $resume->experience);
                $jobTitle = explode(',', $resume->job_title);
                $experienceDate = explode(',', $resume->experience_date);
            @endphp
            @foreach ($exper as $index => $experience)
                <div class="resume_data">
                    <div class="resume_year">{{ trans('resume.'.$experienceDate[$index]) }}</div>
                    <div class="resume_content">
                        <p>{{ trans('resume.'.$experience) }}</p>
                        <p>{{ trans('resume.'.$jobTitle[$index]) }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<!-- Повышение квалификации -->
<div class="resume_item">
    <div class="resume_title"><span>{{ __('resume.Повышение квалификации') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $trainings = explode(',', $resume->training);
                $trainingDates = explode(',', $resume->training_date);
            @endphp
            @foreach ($trainings as $index => $training)
                <div class="resume_data">
                    <div class="resume_year">{{ $trainingDates[$index] }}</div>
                    <div class="resume_content">
                        <p>{{ trans('resume.'.$training) }}</p><br>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<!-- Интересы -->
<div class="resume_item resume_interests">
    <div class="resume_title"><span>{{ __('resume.Интересы') }}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $interests = explode(',', $resume->interests);
                $interestIcons = explode(',', $resume->interests_icon);
            @endphp
            @foreach ($interests as $index => $interest)
                <div class="resume_interests">
                    <div class="resume_int_icon">
                        {!! $interestIcons[$index] !!}
                    </div>
                    <div class="resume_int_data">{{ trans('resume.'.$interest) }}</div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

</div>
</div>
</section>
@endsection