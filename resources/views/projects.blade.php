<!DOCTYPE html>
@extends('layout.index_projects')
<link rel="stylesheet" href="projects.css">
@section('title', 'Projects')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center position-relative">
	<div class="container">
		<section class="gallery">

			<div class="frame">
				<div class="frame__content">
					<h2 class="text width600">STUDIO ABM BUILDERS PROJECTS</h2>
				</div>
			</div>

			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>

			{{-- <div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video>
				</div>
			</div> --}}

			<div class="frame frame_bg"></div>

			<div class="frame ">
				<div class="frame__content text-left">
					<h3 class="text width400">E</h3>
					<p class="text">Lorem ipsum dolor sit amet, consectetur elit adipisicing. Nemo fugit, rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus.</p>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(projects_content/2.jpg)"></div>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/3.jpg)"></div>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__content text-left">
					<h3 class="text width400">Ask the Mountains</h3>
					<p class="text">Lorem ipsum dolor sit amet, consectetur elit. Rerum dolorem assumenda consequatur dicta error iure laboriosam temporibus omnis quae eaque aliquam esse unde accusamus dolores non soluta.</p>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(projects_content/4.jpg)"></div>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media" style="background-image: url(projects_content/5.jpg)"></div>
				</div>
			</div>
		</section>
	</div>
</div>

<img class="soundbutton paused" src="projects_content/sound.gif" alt="Alt">
<audio class="audio" src="projects_content/ambient.mp3" loop></audio>



@endsection



























{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8"> 
	 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	 <title>Document</title> 

	<link rel="stylesheet" href="projects.css">
	<script src="assets/js/projects.js" defer></script>

</head>
<body>

	<div class="container">
		<section class="gallery">

			<div class="frame">
				<div class="frame__content">
					<h2>Beautiful World</h2>
				</div>
			</div>

			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(projects_content/1.jpg)"></div>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media frame-media_right" src="projects_content/2.jpg" autoplay loop muted></video>
				</div>
			</div>

			<div class="frame"></div>


		</section>
	</div>

	<img class="soundbutton paused" src="projects_content/sound.gif" alt="Alt">
	<audio class="audio" src="projects_content/ambient.mp3" loop></audio>

</body>
</html> --}}