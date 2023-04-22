@extends("layouts.app")
@section('title-block')

Резюме

@endsection
@section('content')

<section class="resume_wrapper">
	<div class="resume_left">
		<div class="resume_image">
			<img src="img\portfolio_about.png" alt="Resume_image">
		</div>
		<div class="resume_bottom">
			<div class="resume_item resume_namerole">
				<div class="name">Артёмий Дзюба</div>
				<h3><span class="multiple-text"></span></h3>
			</div>
			<div class="resume_item resume_profile">
				<div class="resume_title">Профиль</div>
				<div class="resume_info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
			</div>
			<div class="resume_item resume_address">
				<div class="resume_title">Адрес</div>
				<div class="resume_info">
					Минск, Республика Беларусь
				</div>
			</div>
			<div class="resume_item resume_contact">
				<div class="resume_title">Контакты</div>
				<div class="resume_info">
					<div class="resume_subtitle">Телефон</div>
					<div class="resume_subinfo">+375 29 187-55-26</div>
				</div>
				<div class="resume_info">
					<div class="resume_subtitle">Email</div>
					<div class="resume_subinfo">dz.artsiomi@gmail.com</div>
				</div>
			</div>
			<div class="resume_item resume_skills">
				<div class="resume_title">Навыки</div>
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
			<div class="name">Артёмий Дзюба</div>
			<h3><span class="multiple-text"></span></h3>
		</div>
		<div class="resume_item resume_education">
			<div class="resume_title">Образование</div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="year">2009 - 2014</div>
					<div class="resume_content">
						<p>Международный государственный экологический университет имени А.Д.Сахарова"</p>
						<p>Специальность: инженер-программист (в здравоохранении)</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2021 - 2023</div>
					<div class="resume_content">
						<p>Институт информационных технологий БГУИР</p>
						<p>Программист – Web-дизайнер</p>
					</div>
				</div>
			</div>
		</div>
		<div class="resume_item resume_experience">
			<div class="resume_title">Опыт</div>
			<div class="resume_info">
				<div class="resume_data">
					<div class="year">2012 - 2012</div>
					<div class="resume_content">
						<p>ООО "МИРТА"</p>
						<p>Укладчик-упаковщик</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2013 - 2014</div>
					<div class="resume_content">
						<p>РНПЦ МТ</p>
						<p>Инженер-электроник</p>
					</div>
				</div>
				<div class="resume_data">
					<div class="year">2014 - настоящее время</div>
					<div class="resume_content">
						<p>УП "Центр экспертиз и испытаний в здравоохранении" · Полный рабочий день</p>
						<p>Ведущий специалист</p>
					</div>
				</div>
			</div>
		</div>
		<div class="resume_item resume_interests">
			<div class="resume_title">Интересы</div>
			<div class="resume_info">
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-body'></i>
					</div>
					<div class="int_data">Тайский бокс</div>
				</div>
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-cycling'></i>
					</div>
					<div class="int_data">Эндуро</div>
				</div>
				<div class="interests">
					<div class="int_icon">
                    <i class='bx bx-swim' ></i>
					</div>
					<div class="int_data">Фридайвинг</div>
				</div>
                <div class="interests">
					<div class="int_icon">
                    <i class='bx bx-tennis-ball'></i>
					</div>
					<div class="int_data">Сквош</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection