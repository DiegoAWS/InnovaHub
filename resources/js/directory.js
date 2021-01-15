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


var dataFromServer= [
    {
    title : 'HARDVARD University',
    image : '/imagesTest/Image0.jpg'
    },
    {
    title : 'Combinado cárnico',
    image : '/imagesTest/Image1.jpg'
    },
    {
    title : 'Poder popular Centro Habana y Havana Vieja',
    image : '/imagesTest/Image2.jpg'
    },
    {
    title : 'CITMATEL',
    image : '/imagesTest/Image3.jpg'
    },
    {
    title : 'Apple Corp. Inc International',
    image : '/imagesTest/Image4.jpg'
    }
]



    // const directoryContainer = document.getElementById("directoryContainer")
    const directorioView = document.getElementById("directorioView")
    const detailsView = document.getElementById("detailsView")

    const detailsTitle = document.getElementById("detailsTitle")

    const detailsImage = document.getElementById("detailsImage")

    const router = new Navigo('/');

    router.on('/', function () {
       

    });

    router.on('/directory', function () {

        directorioView.className = ""
        detailsView.className = "hidden"
        
        window.scrollTo(0,0)
    });
    router.on('/directory/detail/:id', ({data} ) => {
       let id=data&&data.id ? data.id:0

       let info=dataFromServer[id % 5]
       detailsTitle.innerText=info.title
       detailsImage.src=info.image

        directorioView.className = "hidden"
        detailsView.className = ""
        window.scrollTo(0,0)
    });
 router.resolve();






}


