@extends("layouts.app")
@section('title-block')

Резюме

@endsection
@section('content')

<section class="resume_wrapper">
	<div class="resume_left">
		<div class="resume_image">
		<img src="{{ asset('img\resume.png')}}" alt="Resume_image">
		</div>
		<div class="resume_bottom">
			<div class="resume_item resume_namerole">
				<div class="name">{{__('resume.Артёмий Дзюба')}}</div>
                
				
			</div>
			<div class="resume_item resume_profile">

			<div class="resume_title_localization">
				<div class="resume_title">{{__('resume.Профиль')}}</div>
					
					<div class="localization">
						<a href="{{ route('locale', ['locale' => 'ru']) }} " class="{{ app()->getLocale() == 'ru' ? 'active' : '' }}">RU</a>
						/
						<a href="{{ route('locale', ['locale' => 'en']) }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
					</div>
				</div>
				
			
				<div class="resume_info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>

			</div>

			<div class="resume_item resume_address">
				<div class="resume_title">{{__('resume.Адрес')}}</div>
				<div class="resume_info">
                {{__('resume.Минск, Республика Беларусь')}}
				</div>
			</div>
			<div class="resume_item resume_contact">
				<div class="resume_title">{{__('resume.Контакты')}}</div>
				<div class="resume_info">
					<div class="resume_subtitle">{{__('resume.Телефон')}}</div>
					<div class="resume_subinfo">+375 29 187-55-26</div>
				</div>
				<div class="resume_info">
					<div class="resume_subtitle">Email</div>
					<div class="resume_subinfo">dz.artsiomi@gmail.com</div>
				</div>
				<div class="resume_info">
					<!-- <div class="resume_subtitle">Email</div> -->
					<div class="resume_subinfo"><a href="https://www.linkedin.com/in/dzartsiomi/" title="Linkedin" target="_blank">Linkedin</a></div>
				</div>
			</div>
			<div class="resume_item resume_skills">
				<div class="resume_title">{{__('resume.Навыки')}}</div>
				<div class="resume_info">
					<div class="skills_list">
						<div class="skills_left">HTML</div>
						<div class="skills_bar">
							<p>
								<span style="width: 90%"></span>
							</p>
						</div>
					</div>
					<div class="skills_list">
						<div class="skills_left">CSS</div>
						<div class="skills_bar">
							<p>
								<span style="width: 80%"></span>
							</p>
						</div>
					</div>
					<div class="skills_list">
						<div class="skills_left">Javascript</div>
						<div class="skills_bar">
							<p>
								<span style="width: 50%"></span>
							</p>
						</div>
					</div>
					<div class="skills_list">
						<div class="skills_left">Photoshop</div>
						<div class="skills_bar">
							<p>
								<span style="width: 95%"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="resume_right">
		<div class="resume_item resume_namerole">
			<div class="name">{{__('resume.Артёмий Дзюба')}}</div>
			<h3><span class="multiple-text"></span></h3>
		</div>
		<div class="resume_item resume_education">
			<div class="resume_title">{{__('resume.Образование')}}</div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="year">2021 - 2023</div>
					<div class="resume_content">
						<p>{{__('resume.Институт информационных технологий БГУИР')}}</p>
						<p>@lang('resume.Квалификация: программист – Web-дизайнер')</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2009 - 2014</div>
					<div class="resume_content">
						<p>{{__('resume.Международный государственный экологический университет имени А.Д. Сахарова')}}</p>
						<p>{{__('resume.Квалификация: инженер-программист (в здравоохранении)')}}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="resume_item resume_experience">
			<div class="resume_title">{{__('resume.Опыт работы')}}</div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="year">2014 - {{__('resume.настоящее время')}}</div>
					<div class="resume_content">
						<p>{{__('resume.РУП "Центр экспертиз и испытаний в здравоохранении"')}}</p>
						<p>{{__('resume.Ведущий специалист')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2013 - 2014</div>
					<div class="resume_content">
						<p>{{__('resume.РНПЦ МТ')}}</p>
						<p>{{__('resume.Инженер-электроник')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2012 - 2012</div>
					<div class="resume_content">
						<p>{{__('resume.ООО "МИРТА"')}}</p>
						<p>{{__('resume.Укладчик-упаковщик')}}</p>
					</div>
				</div>
			</div>
		</div>

		
		<div class="resume_item resume_education">
			<div class="resume_title">{{__('resume.Повышение квалификации')}}</div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="year">02.08.2021 - 27.08.2021</div>
					<div class="resume_content">
						<p>{{__('resume.Администрирование Linux')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">13.05.2019 - 17.05.2019</div>
					<div class="resume_content">
						<p>{{__('resume.Построение и администрирование локальных сетей')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">19.03.2019 - 30.04.2019</div>
					<div class="resume_content">
						<p>{{__('resume.Системный администратор')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">27.11.2017 - 08.12.2017</div>
					<div class="resume_content">
						<p>{{__('resume.Безопасность информационных технологий')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">07.06.2016-09.06.2016</div>
					<div class="resume_content">
						<p>{{__('resume.Защита от чрезвычайных ситуаций для руководящего состава сил ГСЧС и ГО')}}</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">26.10.2015 - 30.10.2015</div>
					<div class="resume_content">
						<p>{{__('resume.20110 Установка и настройка Windows Server 2012')}}</p>
					</div>
				</div>
			</div>
		</div>


		<div class="resume_item resume_interests">
			<div class="resume_title">{{__('resume.Интересы')}}</div>
			<div class="resume_info">
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-body'></i>
					</div>
					<div class="int_data">{{__('resume.Тайский бокс')}}</div>
				</div>
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-cycling'></i>
					</div>
					<div class="int_data">{{__('resume.Эндуро')}}</div>
				</div>
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-swim' ></i>
					</div>
					<div class="int_data" data-tooltip="Molchanovs L1 и AIDA1">{{__('resume.Фридайвинг')}}</div>
					
				</div>
                <div class="interests">
					<div class="int_icon">
                    <i class='bx bx-tennis-ball'></i>
					</div>
					<div class="int_data">{{__('resume.Сквош')}}</div>
				</div>
			</div>
		</div>
        
	</div>
</section>

@endsection