const audio = document.getElementById("audio");
const songIndex = document.getElementsByClassName("num");
const playingSong = document.getElementById("playingSong");
const playButton = document.querySelectorAll(".playing-icon");
const currentTime = document.getElementById("startPlaying");
const totalDuration = document.getElementById("endPlaying");
const progressEl = document.querySelector('input[type="range"]');
const playLagreButton = document.getElementById("playingLargeIcon");
const volumeSlider = document.getElementById("sliderVolume");
const lyricButton = document.getElementById("lyricButton");
const containerSong = document.getElementById("containerSong");
const backgroundColorLyric = document.getElementById("thumbailColor");
const nameSongPlaying = document.getElementsByClassName("nameSong");
const nameArtistPlaying = document.getElementsByClassName("nameArtist");
const imagePlayings = document.getElementById("imagePlaying")
const shuffleButton = document.getElementById('shuffle');
const enableVolumn = document.getElementById('enableVolumn');
const disableVolumn = document.getElementById('disableVolumn');

const intervalLyric = setInterval(() => {
	var lyricToAudio = document.querySelectorAll("#contentLyrics h2");

	if (lyricToAudio.length > 0) {
		lyricToAudio.forEach((el, index) => {
			el.addEventListener('click', (event) => {
				progressEl.value = timeList[index] / 1000;
				audio.currentTime = timeList[index] / 1000;
			})
		})
		clearInterval(intervalLyric);
	}
})


var timeList = [];
var countTimer = 0;
var time;

// Lyrics
const containerLyric = document.querySelector(".lyricSong");
var contentLyric = document.querySelector("#contentLyrics");

// Set Background Lyric
containerLyric.style.backgroundColor =
	window.getComputedStyle(backgroundColorLyric).backgroundColor;

// Enable and Disable Lyric button
lyricButton.addEventListener("click", function () {
	if (containerLyric.style.display === "none") {
		containerLyric.style.display = "block";
	} else {
		containerLyric.style.display = "none";
	}
});

function processing(lyric) {
	$.getJSON(lyric, function (data) {
		let htmlLyrics = "";
		timeList = [];

		for (let i = 0; i < data.lyrics.length; i++) {
			timeList.push(data.lyrics[i].time);
			htmlLyrics += "<h2>" + data.lyrics[i].line + "</h2>";
		}

		contentLyric.innerHTML = htmlLyrics;
	});
}

let playItemButton;
let index = songIndex.textContent;

playingSong.addEventListener("click", function (event) {
	if (!audio.src) {
		firstSong();
	} else {
		PlayButton(playItemButton);
	}
});

playLagreButton.addEventListener("click", function (event) {
	if (!audio.src) {
		firstSong();
	} else {
		PlayButton(playItemButton);
	}
})

function firstSong() {
	// TODO
	playButton[0].click();
}

function PlayButton(playItemButton) {
	if (audio.paused) {

		audio.play();

		$.ajax({
			url: "http://localhost/Spotify/Playlist/playSong",
			type: "POST",
			data: {
				songId: playItemButton.dataset.id,
			},
		});

		playingSong.src =
			"http://localhost/Spotify/src/assets/icons/pause_black.svg";
		playLagreButton.src =
			"http://localhost/Spotify/src/assets/icons/pause_small.svg";
		playItemButton.src =
			"https://open.spotifycdn.com/cdn/images/equaliser-animated-green.f5eb96f2.gif";

		playItemButton.onmouseover = function () {
			playItemButton.src =
				"http://localhost/Spotify/src/assets/icons/pause_small.svg";
		};

	} else {
		audio.pause();

		playingSong.src =
			"http://localhost/Spotify/src/assets/icons/play_black.svg";
		playLagreButton.src =
			"http://localhost/Spotify/src/assets/icons/play_small.svg";
		playItemButton.src =
			"http://localhost/Spotify/src/assets/icons/play_small.svg";

		playItemButton.onmouseover = function () {
			playItemButton.src =
				"http://localhost/Spotify/src/assets/icons/play_small.svg";
		};
	}
}

function Lyrics() {
	containerSong.style.overflow = "hidden";
}

function PlayingMusic(event, audioSongMusic, lyric, nameSong, nameArtist, imagePlaying) {
	playItemButton = event.target;

	const xml = new XMLHttpRequest();
	const formdata = new FormData();
	formdata.append('name', nameSong);
	formdata.append('artist', nameArtist);
	xml.onload = function (response) {
		if (this.readyState == 4 && this.status == 200) {
			// Typical action to be performed when the document is ready:

		}
	};
	xml.open('POST', '../../song/songHistory');
	xml.send(formdata)
	let mouseDownOnSlider = false;

	if (audio.src != audioSongMusic) {
		audio.src = audioSongMusic;
		nameSongPlaying[0].innerHTML = nameSong;
		nameArtistPlaying[0].innerHTML = nameArtist
		imagePlayings.src = imagePlaying
		processing(lyric);

	}

	setInterval(setUpdate, 1000);

	setTimeout(() => {
		PlayButton(playItemButton);
	}, 1000);

	audio.addEventListener("loadeddata", () => {
		progressEl.value = 0;
	});

	audio.addEventListener("timeupdate", () => {
		if (!mouseDownOnSlider) {
			progressEl.value = (audio.currentTime / audio.duration) * 100;
		}
	});

	progressEl.addEventListener("change", () => {
		const pct = progressEl.value / 100;
		audio.currentTime = (audio.duration || 0) * pct;
	});
	progressEl.addEventListener("mousedown", () => {
		mouseDownOnSlider = true;
	});
	progressEl.addEventListener("mouseup", () => {
		mouseDownOnSlider = false;
	});
}

audio.addEventListener("ended", () => {
	playItemButton.src =
		"http://localhost/Spotify/src/assets/icons/play_small.svg";

	if (shuffleButton.classList.contains("shuffle_active")) {
		shuffleSong();
	} else {
		nextSong();
	}
});

// NOTE --> Set Volume
function setVolume() {
	audio.volume = volumeSlider.value / 100;
}

function upAndDownVolume() {

	if (audio.volume != 0) {
		audio.volume = 0;
		volumeSlider.value = 0;
		disableVolumn.style.display = "inline-block";
		enableVolumn.style.display = "none";
	} else {
		audio.volume = 1;
		volumeSlider.value = 100;
		disableVolumn.style.display = "none";
		enableVolumn.style.display = "inline-block";
	}
}

// NOTE --> Next Song
function nextSong() {
	let next;

	console.log('prev ->', playItemButton.dataset.id);

	for (let i = 0; i < playButton.length; i++) {

		if (playButton[i] == playItemButton) {
			next = playButton[i + 1];
			break;
		}
	}

	console.log('next --> ', next.dataset.id);

	next.click();

	console.log('%cヾ(・ω・)メ(・ω・)ノ Next Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");
}

function shuffleSong() {
	let shuffle;

	if (shuffleButton.classList.contains("shuffle_active")) {

		console.log('%cヾ(・ω・)メ(・ω・)ノ Shuffle Song Enable ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");

		for (let i = 0; i < playButton.length; i++) {

			if (playButton[i] == playItemButton) {
				shuffle = playButton[Math.floor(Math.random() * (playButton.length + 1))];
				break;
			}
		}

		shuffle.click();
	}
}

function shuffle() {
	let shuffle;

	shuffleButton.classList.toggle("shuffle_active");

	if (shuffleButton.classList.contains("shuffle_active")) {

		console.log('%cヾ(・ω・)メ(・ω・)ノ Shuffle Song Enable ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");

		for (let i = 0; i < playButton.length; i++) {

			if (playButton[i] == playItemButton) {
				shuffle = playButton[Math.floor(Math.random() * (playButton.length + 1))];
				break;
			}
		}

		shuffle.click();
	}

}

function previousSong() {

	let previous;


	for (let i = 0; i < playButton.length; i++) {
		if (playButton[i] == playItemButton) {
			previous = playButton[i - 1];
			break;
		}
	}

	previous.click();

	console.log('%cヾ(・ω・)メ(・ω・)ノ Previous Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");
}

// -------------- Loop Song ---------------- //
let state = 1;
let loopButton = document.querySelector('#loopSong img');

$('#loopSong').bind('click', function () {
	if (state == 1) {
		console.log('%cヾ(・ω・)メ(・ω・)ノ Loop All Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");

		if (audio.loop) {
			audio.loop = false;
		}

		audio.addEventListener("ended", () => {
			if (playButton[playButton.length - 1] == playItemButton && audio.ended) {
				playButton[0].click();
			}
		});

		loopButton.src = "http://localhost/Spotify/src/assets/icons/loopAllSong.svg";
		state = 2;
	} else if (state == 2) {
		console.log('%cヾ(・ω・)メ(・ω・)ノ Loop One Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");

		audio.loop = true;
		loopButton.src = "http://localhost/Spotify/src/assets/icons/loopOneSong.svg";
		state = 3;
	} else if (state == 3) {
		console.log('%cヾ(・ω・)メ(・ω・)ノ Disable Loop Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");

		if (audio.loop) {
			audio.loop = false;
		}

		loopButton.src = "http://localhost/Spotify/src/assets/icons/loopSong.svg";
		state = 1;
	}
})

// if (audio.loop) {
// 	audio.loop = false;
// 	$("#loopSong").find("svg path").css("fill", "")

// 	console.log('Function Loop Song is DISABLE');
// } else {
// 	audio.loop = true;
// 	$("#loopSong").find("svg path").css("fill", "#2d5")

// 	console.log('%cヾ(・ω・)メ(・ω・)ノ Loop Song ヾ(・ω・)メ(・ω・)ノ', "color: #f84464; font-size:20px");
// }

function setUpdate() {
	let seekPosition = 0;
	if (!isNaN(audio.duration)) {
		seekPosition = audio.currentTime * (100 / audio.duration);
		progressEl.value = seekPosition;

		let currentMinutes = Math.floor(audio.currentTime / 60);
		let currentSeconds = Math.floor(audio.currentTime - currentMinutes * 60);
		let durationMinutes = Math.floor(audio.duration / 60);
		let durationSeconds = Math.floor(audio.duration - durationMinutes * 60);

		if (currentSeconds < 10) {
			currentSeconds = "0" + currentSeconds;
		}
		if (durationSeconds < 10) {
			durationSeconds = "0" + durationSeconds;
		}
		if (currentMinutes < 10) {
			currentMinutes = "0" + currentMinutes;
		}
		if (durationMinutes < 10) {
			durationMinutes = "0" + durationMinutes;
		}

		currentTime.textContent = currentMinutes + ":" + currentSeconds;
		totalDuration.textContent = durationMinutes + ":" + durationSeconds;
	}
	time = audio.currentTime * 1000;
	// Update time
	safeKill = 0;
	while (true) {
		safeKill += 1;
		if (safeKill >= 100) break;

		// console.log('time ', time);

		if (countTimer == 0) {
			if (time < timeList[countTimer]) {
				previous();
				console.log("1");
				break;
			}
		}
		if (countTimer == timeList.length && time <= timeList[countTimer - 1]) {
			countTimer--;
			previous();
			console.log("2");
		}
		if (time >= timeList[countTimer]) {
			if (countTimer <= timeList.length) {
				countTimer++;
			}
			next();
			console.log("3");
		} else if (time < timeList[countTimer - 1]) {
			countTimer--;
			previous();
			console.log("4");
		} else {
			if (!audio.paused && !audio.ended) {
				centerize();
			console.log("5");
			}
			break;
		}
	}
}

// NOTE --> Next Queue
function nextQueue() {
	songIndex++;
}

// NOTE --> Next Lyric
function next() {
	var current = $(".lyricSong .current");
	if (current.length == 0) {
		$("#contentLyrics h2:nth-child(1)").addClass("current");
		return;
	}
	current.removeClass("current");
	current.next().addClass("current");
}

// NOTE --> Previous Lyric
function previous() {
	var current = $(".lyricSong .current");
	if (current.length == 0) {
		return;
	}
	var first = $("#contentLyrics h2:nth-child(1)");
	current.removeClass("current");
	if (current === first) {
		return;
	}
	current.prev().addClass("current");
}


function centerize() {
	// if (audio.pause) return;

	if ($(".current").length == 0) return;
	var a = $(".current").height();
	var c = $(".lyricSong").height();
	var d = $(".current").offset().top - $(".current").parent().offset().top;
	var e = d + a / 2 - (c * 1) / 4;

	$(".lyricSong").animate({
		scrollTop: e + "px"
	}, {
		easing: "swing",
		duration: 500
	});
}