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
					@foreach ($Categorys as $Category)
					<li>
						<div class="data-edit-{{ $Category->id }}">
							<a href="{{ route('listwork.show',$Category->id) }}"><i class="fas fa-list-ul"></i>{{ $Category->name }}</a>
						</div>
						<div><span>6</span></div>
						<div class="work-action">
							<div class="action">
								<button class="btn-edit-{{ $Category->id }}">
										<i class="fas fa-pen"></i>
								</button>
								<script>
								$('.btn-edit-{{ $Category->id }}').click(function(event){
										event.preventDefault()
									$('.data-edit-{{ $Category->id }}').replaceWith('<form method="POST" action="{{ route("category.update",[$Category->id]) }}" id="check">{{ method_field('PUT') }} @csrf <input type="text" name="name" id="" value="{{ $Category->name }}"></form>');
									$('.btn-edit-{{ $Category->id }}').replaceWith('<button form="check" class="btn-edit-{{ $Category->id }}"><i class="fas fa-check"></i></button>');
								});
								</script>
								<form action="{{ route('category.destroy',$Category) }}" method="POST">
									@csrf
									<input type="hidden" name="_method" value="delete">
									<button><i class="fas fa-trash-alt"></i></button>
								</form>
							</div>
						</div>
					</li>
					@endforeach
					{{-- ------- --}}
					<li class="li-add">
						<div class="add">
							<label for="list"><i class="fas fa-list-ul"></i></label>
						<form action="{{ route("category.store") }}" method="post" id="check-group">
							{{ csrf_field() }}
							<input placeholder="Add group" type="text" name="name" id="list">
						</form>
						</div>
						<div class="work-action">
							<button type="submit" form="check-group"><i class="fas fa-check"></i>
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
