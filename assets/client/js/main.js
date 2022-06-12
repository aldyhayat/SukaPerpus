const showModal = () => {
	let modal = document.getElementById("modalMenu");
	console.log("asu");
	modal.style.display = "flex";
};

const closeModal = () => {
	let modal = document.getElementById("modalMenu");
	modal.style.display = "none";
	let Showcase = document.getElementById("wrapper_Showcase");
};

for (var i = 0; i < 21; i++) {
	Showcase.innerHTML += `
    <img src= 'https://picsum.photos/seed/${23 + i}/200' alt= 'gambar ke ${1}'/>
    `;
}
