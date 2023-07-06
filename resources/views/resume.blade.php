@extends("layouts.app")
@section('title-block')

Резюме

@endsection
@section('content')

<section class="resume" id="resume">

<div class="resume_wrapper">
<div class="resume_left">
		<div class="resume_image">
		<img src="{{ asset('img\resume.png')}}" alt="Resume_image">
		</div>
		<div class="resume_bottom">
			<div class="resume_item resume_namerole">
				<div class="resume_name">Дзюба Артёмий Владимирович</div>
			</div>

			<!-- Профиль -->
			<div class="resume_item resume_profile">
			<div class="resume_title_localization">
				<div class="resume_title"><span>{{__('resume.Профиль')}}</span></div>
					<div class="localization">
						<a href="{{ route('locale', ['locale' => 'ru']) }} " class="{{ app()->getLocale() == 'ru' ? 'active' : '' }}">RU</a>
						/
						<a href="{{ route('locale', ['locale' => 'en']) }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
					</div>
				</div>			
				<!-- <div class="resume_info"> Текст</div> -->
			</div>

			<!-- Адрес -->
			<div class="resume_item resume_address">
				<div class="resume_title"><span>{{__('resume.Адрес')}}</span></div>
				<div class="resume_info">
				
				</div>
			</div>

			<!-- Контакты -->
			<div class="resume_item resume_contact">
				<div class="resume_title"><span>{{__('resume.Контакты')}}</span></div>
				<div class="resume_info">
					<div class="resume_subtitle"></div>
					<div class="resume_subinfo">{{__('resume.Телефон')}}: <a href="tel:+375291875526">+375 29 187-55-26</a></div>
				</div>
				<div class="resume_info">
					<div class="resume_subtitle"></div>
					<div class="resume_subinfo">Email: <a href="mailto:dz.artsiomi@gmail.com" target="_blank">dz.artsiomi@gmail.com</a></div> 
				</div>
				<div class="resume_info">
					<div class="resume_subinfo"><a href="https://www.linkedin.com/in/dzartsiomi/" title="Linkedin" target="_blank">Linkedin</a></div>
				</div>
			</div>

			<!-- Навыки -->
		<div class="resume_item resume_skills">
    <div class="resume_title"><span>{{__('resume.Навыки')}}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $skills = explode(',', $resume->skills);
                $skillLevels = explode(',', $resume->skills_lvl);
            @endphp

            @foreach ($skills as $index => $skill)
                <div class="resume_skills_list">
                    <div class="resume_skills_left">{{ $skill }}</div>
                    <p><span style="color: white">{{ $skillLevels[$index] }}</span></p>
                </div>
            @endforeach
        @endforeach
    </div>
</div>


			<!-- Языки -->
			<div class="resume_item resume_skills">
				<div class="resume_title"><span>{{__('resume.Языки')}}</span></div>
				<div class="resume_info">
				@foreach ($resumes as $resume)
            		@php
                		$languages = explode(',', $resume->languages);
                		$languagesLevels = explode(',', $resume->languages_lvl);
            		@endphp

            	@foreach ($languages as $index => $language)
					<div class="resume_skills_list">
						<div class="resume_skills_left">{{ $language }}</div>
						<p><span style="color: white">{{ $languagesLevels[$index] }}</span></p>
					</div>
					@endforeach
        @endforeach
				</div>
			</div>


	     
			<!-- Качества -->
			<div class="resume_item resume_qualities">
    <div class="resume_title"><span>{{__('resume.Качества')}}</span></div>
    <div class="resume_info">
        @foreach ($resumes as $resume)
            @php
                $qualities = explode(',', $resume->qualities);
            @endphp

            @foreach ($qualities as $quality)
                <div class="resume_skills_list">
                    <div class="resume_skills_left">{{ $quality }}</div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>




		</div>
	</div>



	<div class="resume_right">
		<div class="resume_item resume_namerole">
			<div class="resume_name">Дзюба Артёмий Владимирович</div>
		</div>
		<div class="resume_item resume_education">
			<div class="resume_title"><span>{{__('resume.Образование')}}</span></div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="resume_year">2021-2023</div>
					<div class="resume_content">
						<p>{{__('resume.Институт информационных технологий БГУИР')}}</p>
						<p>@lang('resume.Квалификация: программист – Web-дизайнер')</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="resume_year">2009-2014</div>
					<div class="resume_content">
						<p>{{__('resume.Международный государственный экологический университет имени А.Д. Сахарова')}}</p>
						<p>{{__('resume.Квалификация: инженер-программист (в здравоохранении)')}}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="resume_item resume_experience">
			<div class="resume_title"><span>{{__('resume.Опыт работы')}}</span></div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="resume_year">2014-{{__('resume.настоящее время')}}</div>
					<div class="resume_content">
						<p>{{__('resume.РУП "Центр экспертиз и испытаний в здравоохранении"')}}</p>
						<p>{{__('resume.Ведущий специалист')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="resume_year">2013-2014</div>
					<div class="resume_content">
						<p>{{__('resume.РНПЦ МТ')}}</p>
						<p>{{__('resume.Инженер-электроник')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="resume_year">2012-2012</div>
					<div class="resume_content">
						<p>{{__('resume.ООО "МИРТА"')}}</p>
						<p>{{__('resume.Укладчик-упаковщик')}}</p>
					</div>
				</div>
			</div>
		</div>

		
		<div class="resume_item">
			<div class="resume_title"><span>{{__('resume.Повышение квалификации')}}</span></div>
			<div class="resume_info">

				<div class="resume_data">
					<div class="resume_year">02.08.2021-27.08.2021</div>
					<div class="resume_content">
						<p>{{__('resume.Администрирование Linux')}}</p> <br>
					</div>
				</div>

				<div class="resume_data">
					<div class="resume_year">13.05.2019-17.05.2019</div>
					<div class="resume_content">
						<p>{{__('resume.Построение и администрирование локальных сетей')}}</p> <br>
					</div>
				</div>

				<div class="resume_data">
					<div class="resume_year">19.03.2019-30.04.2019</div>
					<div class="resume_content">
						<p>{{__('resume.Системный администратор')}}</p> <br>
					</div>
				</div>

				<div class="resume_data">
					<div class="resume_year">27.11.2017-08.12.2017</div>
					<div class="resume_content">
						<p>{{__('resume.Безопасность информационных технологий')}}</p> <br>
					</div>
				</div>

				<div class="resume_data">
					<div class="resume_year">07.06.2016-09.06.2016</div>
					<div class="resume_content">
						<p>{{__('resume.Защита от чрезвычайных ситуаций для руководящего состава сил ГСЧС и ГО')}}</p> <br>
					</div>
				</div>

				<div class="resume_data">
					<div class="resume_year">26.10.2015-30.10.2015</div>
					<div class="resume_content">
						<p>{{__('resume.20110 Установка и настройка Windows Server 2012')}}</p>
					</div>
				</div>

			</div>
		</div>


		<div class="resume_item resume_interests">
			<div class="resume_title"><span>{{__('resume.Интересы')}}</span></div>
			<div class="resume_info">
				<div class="resume_interests">
					<div class="resume_int_icon">
                    <i class='bx bx-body'></i>
					</div>
					<div class="resume_int_data">{{__('resume.Тайский бокс')}}</div>
				</div>
				<div class="resume_interests">
					<div class="resume_int_icon">
                    <i class='bx bx-cycling'></i>
					</div>
					<div class="resume_int_data">{{__('resume.Эндуро')}}</div>
				</div>
				<div class="resume_interests">
					<div class="resume_int_icon">
                    <i class='bx bx-swim' ></i>
					</div>
					<div class="resume_int_data" data-tooltip="Molchanovs L1 и AIDA1">{{__('resume.Фридайвинг')}}</div>
					
				</div>
                <div class="resume_interests">
					<div class="resume_int_icon">
                    <i class='bx bx-tennis-ball'></i>
					</div>
					<div class="resume_int_data">{{__('resume.Сквош')}}</div>
				</div>
			</div>
		</div>
        
	</div>
</div>

</section>

@endsection