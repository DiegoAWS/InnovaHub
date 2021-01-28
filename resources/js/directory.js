import Navigo from "navigo";
import shareon from "shareon";

shareon();

let userSelection = document.getElementsByClassName("imgCard");

for (let i = 0; i < userSelection.length; i++) {
    (function(index) {
        userSelection[index].addEventListener("click", function() {
            let cardItemId = userSelection[index].id;
            router.navigate("/directory/detail/" + cardItemId);
        });
    })(i);
}

//cardShare
let cardShare = document.getElementsByClassName("cardShare");
let modalShare = document.getElementsByClassName("myModalShare");
let modalContent = document.getElementsByClassName("myModalContent");

for (let j = 0; j < modalShare.length; j++) {
    let modalItem = modalShare[j];

    modalItem.addEventListener("click", function(e) {
        e.stopImmediatePropagation();
        console.log(this.className);
        this.className = "myModalShare myModalHide";
        console.log(this.className);
    });
}

for (let j = 0; j < modalContent.length; j++) {
    modalContent[j].addEventListener("click", function(e) {
        e.stopPropagation();
    });
}
//Agregando MOSTRAR MODAL SHARE en las CARD
for (let i = 0; i < cardShare.length; i++) {
    cardShare[i].addEventListener("click", function(e) {
        e.stopImmediatePropagation();
        let cardItemId = this.getAttribute("data-idCard");

        for (let j = 0; j < modalShare.length; j++) {
            let modalItem = modalShare[j];
            let modalItemId = modalItem.getAttribute("data-idShare");
            console.log("CHILD", cardItemId, modalItemId);
            if (cardItemId === modalItemId) {
                console.log(modalItem);
                modalItem.className = "myModalShare myModalShow";
            }
        }
    });
}
// let shareButtonDetails = document.getElementById("shareButtonDetails");

// shareButtonDetails.addEventListener("click", function(e) {
//     console.log("CHILD", this.firstElementChild);

//     if (this.firstElementChild.className.includes("myModalHide")) {
//         console.log(this.firstElementChild.className);
//         this.firstElementChild.className = "myModalShare myModalShow";
//         console.log(this.firstElementChild.className);
//     }
// });

//#region
var dataFromServer = [
    {
        title: "HARDVARD University",
        image: "/imagesTest/Image0.jpg",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?"
    },
    {
        title: "Combinado cárnico",
        image: "/imagesTest/Image1.jpg",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?"
    },
    {
        title: "Poder popular Centro Habana y Havana Vieja",
        image: "/imagesTest/Image2.jpg",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?"
    },
    {
        title: "CITMATEL",
        image: "/imagesTest/Image3.jpg",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?"
    },
    {
        title: "Apple Corp. Inc International",
        image: "/imagesTest/Image4.jpg",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?"
    }
];
//#endregion

const directoryContainer = document.getElementById("directoryContainer");
const detailsView = document.getElementById("detailsView");

const detailsTitle = document.getElementById("detailsTitle");
const detailsDescription = document.getElementById("detailsDescription");
const detailsImage = document.getElementById("detailsImage");

const router = new Navigo("/");

router.on("/", function() {});

router.on("/directory", function() {
    directoryContainer.style.display = "block";
    detailsView.style.display = "none";

    window.scrollTo(0, 0);
});
router.on("/directory/detail/:id", ({ data }) => {
    let id = data && data.id ? data.id : 0;

    let info = dataFromServer[id % 5];
    detailsTitle.innerText = info.title;
    detailsDescription.innerText = info.description;
    detailsImage.src = info.image;

    directoryContainer.style.display = "none";
    detailsView.style.display = "block";

    window.scrollTo(0, 0);
});
router.resolve();
