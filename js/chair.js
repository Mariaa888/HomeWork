let bar = document.querySelector(".navbar");
function show() {

    bar.style.display = "flex";
}
function closebar() {

    bar.style.display = 'none'

}
let listCards = [];
let listCard = document.querySelector('.listCart');
let total = document.querySelector(".total");
let quantity = document.querySelector(".quantity");

const products = {
    data: [
        {
            id: 1,
            productName: "Lorem Bed",
            category: "Bed",
            price: 30,
            image: "../image/bed1.jpg",
        },
        {
            id: 2,
            productName: "Lorem Bed",
            category: "Bed",
            price: 49,
            image: "../image/bed2.webp",
        }, {
            id: 3,
            productName: "Lorem Chair",
            category: "Chair",
            price: 29,
            image: "../image/chair1.webp",
        },
        {
            id: 4,
            productName: "Lorem Table",
            category: "Table",
            price: 40,
            image: "../image/table4.jpg",
        },
        {
            id: 5,
            productName: "Lorem Bed",
            category: "Bed",
            price: 99,
            image: "../image/bed3.jpeg",
        }, {
            id: 6,
            productName: "Lorem Table",
            category: "Table",
            price: 189,
            image: "../image/table1.jpg",
        },
        {
            id: 7,
            productName: "Lorem Bed",
            category: "Bed",
            price: 89,
            image: "../image/bed4.jpg",
        },

        {
            id: 8,
            productName: "Lorem Chair",
            category: "Chair",
            price: 20,
            image: "../image/chair2.webp",
        }, {
            id: 9,
            productName: "Lorem Table",
            category: "Table",
            price: 189,
            image: "../image/table2.jpg",
        },
        {
            id: 10,
            productName: "Lorem Chair",
            category: "Chair",
            price: 189,
            image: "../image/chair3.jpg",
        },


        {
            id: 11,
            productName: "Lorem Table",
            category: "Table",
            price: 189,
            image: "../image/table3.jpg",
        },
        {
            id: 12,
            productName: "Lorem Chair",
            category: "Chair",
            price: 49,
            image: "../image/chair4.jpeg",
        },

    ],
}; {
    for (let i of products.data) {

        //Create Card
        let card = document.createElement("div");
        card.classList.add("card", i.category, "hide");
        //id
        const cardId = i.id;
        card.dataset.id = cardId;
        //image div
        let imgContainer = document.createElement("div");
        imgContainer.classList.add("image-container");
        //img tag
        let image = document.createElement("img");
        image.setAttribute("src", i.image);
        imgContainer.appendChild(image);
        card.appendChild(imgContainer);
        //container
        let container = document.createElement("div");
        container.classList.add("container");
        //product name
        let name = document.createElement("h5");
        name.classList.add("product-name");
        name.innerText = i.productName.toUpperCase();
        container.appendChild(name);
        //price
        let price = document.createElement("h6");
        price.innerText = "$" + i.price;
        container.appendChild(price);
        card.appendChild(container);;
        //button
        let button1 = document.createElement("button");
        button1.classList.add("add-to-cart");
        button1.innerText = "Add to Cart";
        button1.addEventListener("click", () => {
            addToCard(cardId);
        });

        container.appendChild(button1);
        card.appendChild(container);
        document.getElementById("products").appendChild(card);
    }
}

function addToCard(cardId) {
    if (!listCards[cardId]) {
        const product = products.data.find(item => item.id === cardId);
        if (product) {
            listCards[cardId] = { ...product, quantity: 1 };
            listCards[cardId].price = listCards[cardId].quantity * product.price;
        } else {
            console.error("Product with ID", cardId, "not found.");
        }
    } else {
        listCards[cardId].quantity += 1;
        listCards[cardId].price = listCards[cardId].quantity * products.data.find(item => item.id === cardId).price; // Recalculate price
    }

    reloadCard();
} function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((i, cardId) => {
        totalPrice += i.price;
        count += i.quantity;
        if (i != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
            
                <div><img src="${i.image}"/></div>
                <div>${i.productName}</div>
                <div>${i.price.toLocaleString()}</div>
                <div class="tocart">
                    <button onclick="changeQuantity(${cardId}, ${i.quantity - 1})">-</button>
                    <div class="count">${i.quantity}</div>
                    <button onclick="changeQuantity(${cardId}, ${i.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
            const currentCountElement = newDiv.querySelector('.count');
            currentCountElement.innerText = i.quantity;
        }

        total.innerText = totalPrice.toLocaleString();
        quantity.innerText = count;
    })


}
function changeQuantity(cardId, quantity) {
    const product = products.data.find(item => item.id === cardId);

    if (product) {
        if (quantity == 0) {
            delete listCards[cardId];
            total.innerText = 0;
        }
        else {

            listCards[cardId].quantity = quantity;
            listCards[cardId].price = quantity * product.price;
        }
    } else {
        console.error("Product with ID", cardId, "not found.");
    }
    reloadCard();
}
function filterProduct(value) {
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
        if (value.toUpperCase() == button.innerText.toUpperCase()) {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });
    let elements = document.querySelectorAll(".card");
    elements.forEach((element) => {

        if (value == "all") {
            element.classList.remove("hide");
        } else {

            if (element.classList.contains(value)) {

                element.classList.remove("hide");
            } else {
                element.classList.add("hide");
            }
        }
    });

}
let cards = document.querySelectorAll(".card");
document.getElementById("search").addEventListener("click", () => {
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");


    elements.forEach((element, index) => {

        if (element.innerText.includes(searchInput.toUpperCase())) {

            cards[index].classList.remove("hide");
        } else {

            cards[index].classList.add("hide");
        }
    });
});

window.onload = () => {
    filterProduct("Chair");
};

function play(value) {
    category = filterProduct(value);
}

let iconCart = document.querySelector('.icon-cart');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');


iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})

closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})
let isBestSellerSelected = false;
function best() {
    isBestSellerSelected = true;
    document.querySelectorAll(".card").forEach(card =>
        card.classList.add("hide"));

    showBestSellers();
}

function showBestSellers() {
    document.querySelectorAll(".card").forEach(card => {
        const cardId = parseInt(card.dataset.id);
        if (cardId === 1 || cardId === 4) {
            card.classList.remove("hide");
        }
    });
}

function handleCheckout() {

    alert("Payment Seccess.");
} 