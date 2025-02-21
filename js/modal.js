function openModal(modimg) {
	let img = document.getElementById(modimg)
	let modal = document.getElementById('myModal');
	let modalImg = document.getElementById('moddisplay');
	let captionText = document.getElementById('caption');
	modal.style.display = "block";
	modalImg.src = img.src;
	captionText.innerHTML = img.alt;
	
}

function closeModal() {
	let modal = document.getElementById('myModal');
	modal.style.display = "none";
}
