let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
})
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Avocado Toast',
        image: '17.JPG',
        price: 250.00
    },
    {
        id: 2,
        name: 'Pizza',
        image: '2.JPG',
        price: 1200.00
    },
    {
        id: 3,
        name: 'Sushi Burritos',
        image: '14.JPG',
        price: 500.00
    },
    {
        id: 4,
        name: 'Passta',
        image: '4.JPG',
        price: 500.00
    },
    {
        id: 5,
        name: 'Acai Bowls',
        image: '18.JPG',
        price: 450.00
    },
    {
        id: 6,
        name: 'Quinoa Bowls',
        image: '19.JPG',
        price: 550.00
    },

    {
        id: 7,
        name: 'Laksa',
        image: '20.JPG',
        price: 600.00
    },
    {
        id: 8,
        name: 'Tacos',
        image: '21.webp',
        price: 600.00
    },
    {
        id: 9,
        name: 'Burger',
        image: '35.JPG',
        price: 500.00
    },
    {
        id: 10,
        name: 'Fries',
        image: '22.JPG',
        price: 400.00
    },
    {
        id: 11,
        name: 'Coffee',
        image: '36.JPG',
        price: 100.00
    },
    {
        id: 12,
        name: 'Matcha Lattes',
        image: '24.JPG',
        price: 250.00
    },
    {
        id: 13,
        name: ' Kombucha',
        image: '37.webp',
        price: 300.00
    },
    {
        id: 14,
        name: 'Smoothie',
        image: '23.JPEG',
        price: 250.00
    },
    {
        id: 15,
        name: 'Fruit Infused Water',
        image: '38.JPEG',
        price: 200.00
    },
    {
        id: 16,
        name: 'Coconut Water',
        image: '39.JPG',
        price: 200.00
    },
    {
        id: 17,
        name: 'Tea',
        image: '40.JPG',
        price: 50.00
    },
    {
        id: 18,
        name: 'Vegetable Juices',
        image: '25.JPG',
        price: 200.00
    },
    {
        id: 19,
        name: 'Sparkling Water',
        image: '27.JPEG',
        price: 200.00
    },
    {
        id: 20,
        name: 'Milk',
        image: '41.webp',
        price: 100.00
    }

];

let listCards = [];
function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="img/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}


initApp();
function addToCard(key) {

    if (listCards[key] == null) {
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();

}
function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="img/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity) {
    if (quantity == 0) {
        // delete listCards[key];
        listCards.splice(key,1);
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}


function searchFood() {
    // Get the search input value
    var searchValue = document.getElementById("foodSearch").value.toLowerCase();

    // Get all the items
    var items = document.getElementsByClassName("item");

    // Loop through each item and hide/show based on the search value
    for (var i = 0; i < items.length; i++) {
        var itemName = items[i].getElementsByClassName("title")[0].innerText.toLowerCase();
        var item = items[i];

        if (itemName.includes(searchValue)) {
            item.style.display = "block"; // Show the item
        } else {
            item.style.display = "none"; // Hide the item
        }
    }
}

document.getElementById("payButton").addEventListener("click", () => {

    var data = JSON.stringify(listCards);



    fetch("./category.php", {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": data
    }).then(function (res) {

        return res.text();

    }).then(function (data) {
        console.log(data);
        
        window.open('payment.php?totalAmount=0&zipCode=', '_blank'); 
        listCards=[];
        reloadCard();

    });
    
    
    
});
