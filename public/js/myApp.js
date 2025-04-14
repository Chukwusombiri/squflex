const mypage = document.querySelector('body');
const names = [
    'John', 'Emma', 'Michael', 'Sophia', 'Mohammed', 'Olivia', 'Ahmed', 'Isabella',
    'William', 'Ava', 'Muhammad', 'Mia', 'James', 'Liam', 'Maria', 'Sofia',
    'Alex', 'Ethan', 'Amelia', 'Lucas', 'Oliver', 'Noah', 'Emily', 'Chloe',
    'Aiden', 'Harper', 'Ella', 'Lily', 'Yusuf', 'Lina'
];
const cities = [
    'New York', 'Los Angeles', 'Chicago', 'Houston', 'Toronto', 'London', 'Paris', 'Tokyo', 'Sydney', 'Berlin',
    'Mumbai', 'Beijing', 'Rome', 'Istanbul', 'Cairo', 'São Paulo', 'Moscow', 'Bangkok', 'Dubai', 'Mexico City',
    'Miami', 'Vancouver', 'Barcelona', 'Amsterdam', 'Seoul', 'San Francisco', 'Rio de Janeiro', 'Singapore',
    'Cape Town', 'Stockholm',
    'Buenos Aires', 'Shanghai', 'Dublin', 'Vienna', 'Lisbon', 'Prague', 'Athens', 'Budapest', 'Zurich',
    'Hong Kong', 'Montreal',
    'Kuala Lumpur', 'Oslo', 'Warsaw', 'Copenhagen', 'Johannesburg', 'Helsinki', 'Auckland', 'Edinburgh',
    'Melbourne', 'Bangalore'
];
const actions = ['withdrew', 'invested'];
const amountSign = '$';
let counter = 0;

function getRandomElement(array) {
    const randomIndex = Math.floor(Math.random() * array.length);
    return array[randomIndex];
}

function generateRandomAmount() {
    const randomAmount = getRandomNumber(1000, 200000, 1000);
    return `${amountSign}${randomAmount.toLocaleString()}`;
}

function getRandomNumber(min, max, step) {
    const range = (max - min) / step;
    const randomStep = Math.floor(Math.random() * range);
    return min + randomStep * step;
}

function generateRandomTransaction() {
    const name = getRandomElement(names);
    const city = getRandomElement(cities);
    const action = getRandomElement(actions);
    const amount = generateRandomAmount();

    return {
        name: name,
        city: city,
        action: action,
        amount: amount
    };
}

window.addEventListener("load", async (event) => {
    const myIntervalId = setInterval(async () => {
        if (counter < names.length) {
            await insertDiv();
            counter++;
        } else {
            clearInterval(myIntervalId);
        }
    }, 12000)
});

const delay = async (ms, child) => {
    setTimeout(() => {
        mypage.removeChild(child);
    }, ms);
}

const insertDiv = async () => {
    const div = document.createElement('div');
    div.classList.add('show');
    div.id = "infoDiv";
    const para = document.createElement('p');
    const transaction = generateRandomTransaction();
    para.textContent =
        `${transaction.name} from ${transaction.city} just ${transaction.action} ${transaction.amount}`;
    div.append(para);
    mypage.append(div);
    await delay(3500, div);
}

document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector('#menu');
    const hamburger = document.querySelector('.hamburger');

    if (menu) {
        let lastScrollY = window.scrollY;

        const onScroll = () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > 0 && lastScrollY <= 0) {
                menu.classList.add('fixed-menu');
            } else if (currentScrollY === 0 && lastScrollY > 0) {
                menu.classList.remove('fixed-menu');
            }

            lastScrollY = currentScrollY;
        };

        window.addEventListener('scroll', onScroll);

        hamburger.addEventListener('click', () => {
            if (window.scrollY === 0) {
                menu.classList.toggle('fixed-menu');
            }
        });
    }
});


