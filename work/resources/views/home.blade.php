@extends('layouts.app')

@section('content')
<div class="home">
	<div class="container-home">
		<div class="home-menu-list">
			<div class="nav-left">
				<ul class="group">
					<li>
						<div><a href="#"><i class="fas fa-inbox"></i>Inbox</a></div>
						<div><span>1</span></div>
					</li>
					<li>
						<div><a href="#"><i class="fas fa-calendar-alt"></i>Week</a></div>
						<div><span>3</span></div>
					</li>
					<li>
						<div><a href="#"><i class="fas fa-check"></i>Complete</a></div>
						<div><span></span></div>
					</li>
					@foreach ($categories as $categories)
					<li>
						<div class="data-edit-{{ $categories->id }}">
							<a href="{{ route('listwork.show',$categories->id) }}"><i class="fas fa-list-ul"></i>{{ $categories->name }}</a>
						</div>
						<div class="input-edit-{{ $categories->id }} input-edit">
							{{-- <form method="POST" action="{{ route("categories.update",$categories->id) }}" id="checkForm-{{ $categories->id }}">
								{{ method_field('PUT') }} 
								@csrf 
								<input type="text" name="name" value="{{ $categories->name }}">
							</form> --}}

							<input id="input-data-{{ $categories->id }}" type="text" name="name" value="{{ $categories->name }}">

						</div>
						<div><span>6</span></div>
						<div class="work-action">
							<div class="action">
								<button class="btn-edit" data-id="{{ $categories->id }}">
										<i class="fas fa-pen"></i>
								</button>
								{{-- <button type="submit" form="checkForm-{{ $categories->id }}" value="Submit" class="btn-edit-check btn-edit-check-{{ $categories->id }}"><i class="fas fa-check"></i></button> --}}


								<button class="btn-edit-check btn-edit-check-{{ $categories->id }}" data-id="{{ $categories->id }}" type="submit"><i class="fas fa-check"></i></button>


								<form action="{{ route('categories.destroy',$categories) }}" method="POST">
									@csrf
									<input type="hidden" name="_method" value="delete">
									<button><i class="fas fa-trash-alt"></i></button>
								</form>
							</div>
						</div>
					</li>
					@endforeach
					{{-- ------- --}}
					{{-- <li>
						<div class="data-edit-0">
							<a href="{{ route('listwork.show',$categories->id) }}"><i class="fas fa-list-ul"></i>name</a>
						</div>
						<div class="input-edit-0 input-edit">
							<form method="POST" action="{{ route("categories.update",[$categories->id]) }}" id="check">
								{{ method_field('PUT') }} 
								@csrf 
								<input type="text" name="name" id="" value="name">
							</form>
						</div>
						<div><span>6</span></div>
						<div class="work-action">
							<div class="action">
								<button class="btn-edit" data-id="0">
										<i class="fas fa-pen"></i>
								</button>
								<button form="check" class="btn-edit-check btn-edit-check-0"><i class="fas fa-check"></i></button>
								<form action="{{ route('categories.destroy',$categories) }}" method="POST">
									@csrf
									<input type="hidden" name="_method" value="delete">
									<button><i class="fas fa-trash-alt"></i></button>
								</form>
							</div>
						</div>
					</li> --}}
					{{-- aaaaaa --}}
					<li class="li-add">
						<div class="add">
							<label for="list"><i class="fas fa-list-ul"></i></label>
							<input class="dataAdd" placeholder="Add group" type="text" name="name" id="list">
						</div>
						<div class="work-action">
							<button class="buttonAddWork" type="submit" form="check-group"><i class="fas fa-check"></i>
							</button>
						</div>
					</li>
					{{-- --------- --}}
				</ul>
				<ul class="add-work">
					<li class="li-end">
						<button class="add-group">+</button> 
					</li>
				</ul>
			</div>
			<div class="nav-right">
				<div class="toDo">
					<div class="todo-Add">
						<div class="search-container">
							<form action="#">
								<input id="add" type="text" value="" placeholder="Add a to-do in 'Work'... ">
								<a href="#">
									<input type="date"><i class="fas fa-calendar-alt"></i></a>
								<a href="#"><i class="far fa-star"></i></a>
							</form>
						</div>
					</div>
					<div class="todo-list">
						<ul>
							<li>
								<div class="todo-title">
									<div class="todo-list-one">
										<input id=" 123" type="checkbox" >
										<label for="123">Soạn đề thi</label>
									</div>
									<div class="todo-list-one">
										<span>Tue,Feb 26</span>
										<a href="#"><i class="far fa-star"></i></a>
									</div>
								</div>
								<div class="todo-read">
									<i>logic, mức trung bình khá, thang điểm max 9 </i>
								</div>
							</li>
							<li>
								<div class="todo-title">
									<div class="todo-list-one">
										<input id=" 123" type="checkbox" >
										<label for="123">Write best app list</label>
									</div>
									<div class="todo-list-one">
										<span>mon,Dec 26</span>
										<a href="#"><i class="far fa-star"></i></a>
									</div>
								</div>
								<div class="todo-read">
									<i>Additional Configuration
											Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.</i>
								</div>
							</li>
							<li>
								<div class="todo-title">
									<div class="todo-list-one">
										<input id=" 123" type="checkbox" >
										<label for="123">Write best app list</label>
									</div>
									<div class="todo-list-one">
										<span>mon,Dec 26</span>
										<a href="#"><i class="far fa-star"></i></a>
									</div>
								</div>
								<div class="todo-read">
									<i>Additional Configuration
											Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.</i>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection