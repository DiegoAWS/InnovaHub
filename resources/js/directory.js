window.Navigo = require('navigo');


window.onload = function (e) {


    var userSelection = document.getElementsByClassName('directoryCard');

    for (var i = 0; i < userSelection.length; i++) {
        (function (index) {
            userSelection[index].addEventListener("click", function () {

                let cardItemId = userSelection[index].id
                router.navigate('/directory/detail/' + cardItemId);
            })
        })(i);
    }


    var dataFromServer = [
        {
            title: 'HARDVARD University',
            image: '/imagesTest/Image0.jpg',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?'
        },
        {
            title: 'Combinado cárnico',
            image: '/imagesTest/Image1.jpg',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?'
        },
        {
            title: 'Poder popular Centro Habana y Havana Vieja',
            image: '/imagesTest/Image2.jpg',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?'
        },
        {
            title: 'CITMATEL',
            image: '/imagesTest/Image3.jpg',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?'
        },
        {
            title: 'Apple Corp. Inc International',
            image: '/imagesTest/Image4.jpg',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aperiam assumenda, quae error soluta odio consequatur, incidunt ducimus molestiae sed eveniet. Rerum, modi aliquid ipsum ea recusandae itaque voluptatum libero minima sit iusto asperiores facere eaque, dicta quam vel maiores, provident sunt unde iste blanditiis sint commodi in doloribus illo! Sit temporibus laudantium pariatur ipsa excepturi molestias inventore veritatis similique maxime! Numquam ipsam repellendus at optio expedita reiciendis laborum non ad aut, odit similique explicabo! Eum commodi repellat ducimus labore quisquam ad dolorum vero eius quas animi veniam, quod voluptate, impedit temporibus possimus quidem qui officia ea nesciunt, neque fugit?'
        }
    ]



    const directorioView = document.getElementById("directorioView")
    const detailsView = document.getElementById("detailsView")

    const detailsTitle = document.getElementById("detailsTitle")
    const detailsDescription = document.getElementById("detailsDescription")
    const detailsImage = document.getElementById("detailsImage")

    const router = new Navigo('/');

    router.on('/', function () {


    });

    router.on('/directory', function () {

        directorioView.className = ""
        detailsView.className = "hidden"

        window.scrollTo(0, 0)
    });
    router.on('/directory/detail/:id', ({ data }) => {
        let id = data && data.id ? data.id : 0

        let info = dataFromServer[id % 5]
        detailsTitle.innerText = info.title
        detailsDescription.innerText = info.description
        detailsImage.src= info.image

        directorioView.className = "hidden"
        detailsView.className = ""
        window.scrollTo(0, 0)
    });
    router.resolve();






}


