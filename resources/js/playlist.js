let playlist = document.querySelector('.playlist');
let videoList = playlist.querySelector('.video-list');
let listVideos = videoList.querySelectorAll('.video-list-item');
let mainVideo = playlist.querySelector('.main-video'); 
let video = mainVideo.querySelector('video');
let mainTitle = mainVideo.querySelector('.title');

listVideos.forEach(item => {
	item.onclick = () => {
		let src = item.querySelector('img').src;
		video.src = src.replace('png', 'mp4'); 
		let title = item.querySelector('.title').textContent;
		mainTitle.innerHTML = title;
	};
});
