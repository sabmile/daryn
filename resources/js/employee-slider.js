const gallery = document.querySelector('.employee-gallery');
const employeeImg = gallery.querySelector('img');
const employeeInfo = document.querySelector('.employee-info');
const list = document.querySelector('.employee-features');

const next = gallery.querySelector('.btn__next');
const prev = gallery.querySelector('.btn__prev');

let empId = 1;

const startId = 1;
const maxEmpId = 5;

next.onclick = () => {
	if (empId == maxEmpId) {
		return;
	}
	empId++;
	employeeImg.src = ['/assets/img/employees/', empId, '.jpg'].join('');

if (empId == 1) {
		list.querySelector('.name').textContent = 'Юсупова Назигуль Гадылкановна';
		list.querySelector('.birthday').textContent = '21.08.1965';
		list.querySelector('.position').textContent = 'Лауазымы: б/б меңгерушісі';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 40 жыл';
	} else if (empId == 2) {
		list.querySelector('.name').textContent = 'Сагимбекова Эльвира Багисбайкызы';
		list.querySelector('.birthday').textContent = '29.10.1964';
		list.querySelector('.position').textContent = 'Лауазымы: Бухгалтер';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 35 жыл';
	} else if (empId == 3) {
		list.querySelector('.name').textContent = 'Жанбыршинова Ляззат Даулетовна';
		list.querySelector('.birthday').textContent = '';
		list.querySelector('.position').textContent = 'Лауазымы: Медбике';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 30 жыл';
	} else if (empId == 4) {
		list.querySelector('.name').textContent = 'Нұрлыбаева Ұлдана Сәбитқызы';
		list.querySelector('.birthday').textContent = '08.10.1995';
		list.querySelector('.position').textContent = 'Лауазымы: Хатшы';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 5 жыл';
	} else if (empId == 5) {
		list.querySelector('.name').textContent = 'Примбетова Дана Ералиева';
		list.querySelector('.birthday').textContent = '';
		list.querySelector('.position').textContent = 'Лауазымы: Тәрбиеші';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 1 жыл';
	}
}

prev.onclick = () => {
	if (empId == startId) {
		return;
	}
	empId--;
	employeeImg.src = ['/assets/img/employees/', empId, '.jpg'].join('');

	if (empId == 1) {
		list.querySelector('.name').textContent = 'Юсупова Назигуль Гадылкановна';
		list.querySelector('.birthday').textContent = '21.08.1965';
		list.querySelector('.position').textContent = 'Лауазымы: б/б меңгерушісі';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 40 жыл';
	} else if (empId == 2) {
		list.querySelector('.name').textContent = 'Сагимбекова Эльвира Багисбайкызы';
		list.querySelector('.birthday').textContent = '29.10.1964';
		list.querySelector('.position').textContent = 'Лауазымы: Бухгалтер';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 35 жыл';
	} else if (empId == 3) {
		list.querySelector('.name').textContent = 'Жанбыршинова Ляззат Даулетовна';
		list.querySelector('.birthday').textContent = '';
		list.querySelector('.position').textContent = 'Лауазымы: Медбике';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 30 жыл';
	} else if (empId == 4) {
		list.querySelector('.name').textContent = 'Нұрлыбаева Ұлдана Сәбитқызы';
		list.querySelector('.birthday').textContent = '08.10.1995';
		list.querySelector('.position').textContent = 'Лауазымы: Хатшы';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 5 жыл';
	} else if (empId == 5) {
		list.querySelector('.name').textContent = 'Примбетова Дана Ералиева';
		list.querySelector('.birthday').textContent = '';
		list.querySelector('.position').textContent = 'Лауазымы: Тәрбиеші';
		list.querySelector('.experience').textContent = 'Еңбек өтілі: 1 жыл';
	}
}

