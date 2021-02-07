import Navigo from "navigo";
import shareon from "shareon";
import Glider from "../lib/glider/glider"
shareon();


//#region fake Data
var dataFromServer = [
    {
        title: "HARVARD University",
        image: "/imagesTest/Image0.jpg",
        description:
            "Steve Wozniak y Steve Jobs se conocieron en 1971, cuando un amigo mutuo, Bill Fernández, presentó a Wozniak, quien tenía 21 años de edad, a Jobs, entonces de 15 años. Steve Wozniak, a quien le gustaba que le llamaran Woz, siempre había sentido una gran atracción por la electrónica en general, diseñando desde que era pequeño circuitos en papel para después tratar de optimizarlos al máximo. Dada su afición por la electrónica, Woz  a otros chicos a los que les gustase el tema, como Bill Fernández o el mismo Steve Jobs."
    },
    {
        title: "Combinado cárnico",
        image: "/imagesTest/Image1.jpg",
        description:
            "Pronto Wozniak empezó a dedicar cada vez más y más tiempo a construir en papel su propia computadora. Tras intentos relativamente infructuosos en su oficina de trabajo en Hewlett-Packard (sus jefes vieron el proyecto y no estaban interesados y le autorizaron a continuarlo),8​ finalmente sus esfuerzos dieron como resultado lo que sería la Apple I. Tras la presentación de su computadora en el club informático Homebrew Computer Club y asombrar a sus participantes,9​ Jobs rápidamente vio la oportunidad de negocio, por lo que empezó a promover la computadora entre otros aficionados de la informática del Homebrew Computer Club y otras tiendas de electrónica digital."
    },
    {
        title: "Poder popular Centro Habana y Havana Vieja",
        image: "/imagesTest/Image2.jpg",
        description:
            "Doce días después de la fundación Wayne vende sus acciones por US$ 800 y pasado el tiempo el contrato original que él mismo firmó por US$ 500.13​ Dicho contrato luego se subastó el 13 de diciembre de 2011 en Nueva York, el cual tuvo como base un valor inicial de entre 100 y 150 mil dólares,14​ pero que alcanzó finalmente un valor venta de 1,59 millones de dólares.15​ Se les unieron más amigos, pero las prestaciones del Apple I eran limitadas, así que empezaron a buscar financiación. Finalmente, Jobs conoció a Mike Markkula, que accedió a invertir 250 000 USD."
    },
    {
        title: "CITMATEL",
        image: "/imagesTest/Image3.jpg",
        description:
            "Con el dinero ganado gracias a la venta del Apple I, en Apple pudo comenzar a pensar en una máquina bastante más ambiciosa: el Apple II. Para Wozniak, el Apple II iba a ser simplemente la computadora que hubiera querido construir si no hubiera tenido las limitaciones económicas que tuvo con el Apple I. Tuvo la idea de incluir en el equipo memoria de vídeo para administrar la visualización en color, del mismo modo que incluía numerosas tarjetas de expansión de modo que los usuarios pudieran ampliar las capacidades de la computadora según sus propias necesidades."
    },
    {
        title: "Apple Corp. Inc International",
        image: "/imagesTest/Image4.jpg",
        description:
            "Con el diseño del primer prototipo del Apple II recién terminado, Apple decidió asistir al festival informático Personal Computing Festival, un nuevo certamen. Allí, la incipiente industria de la microinformática podía mostrar sus progresos y hacer negocio y contactos. En el vuelo a Filadelfia, lugar donde se celebrara en 1976, los fundadores de Apple coincidieron en el avión con los fundadores de Processor Technology y su recién diseñada computadora Sol, coincidencia que tuvo un gran impacto en el futuro inmediato de Apple."
    }
];
//#endregion

const directoryContainer = document.getElementById("directoryContainer");
const detailsView = document.getElementById("detailsView");

const detailTitles = document.getElementsByClassName("TitleDetails");
const detailDescription = document.getElementById("detailDescription");


const myGlider=new Glider(document.querySelector('.glider'), {
    slidesToShow: 1,
    dots: '.dots',
    rewind:true
  });

  function sliderAuto(slider, miliseconds) {
    const slidesCount = slider.track.childElementCount;
    let slideTimeout = null;
    let nextIndex = 1;

    function slide () {
      slideTimeout = setTimeout(
        function () {
          if (nextIndex >= slidesCount ) {
            nextIndex = 0;
          }
          slider.scrollItem(nextIndex++);
        },
        miliseconds
      );
    }

    slider.ele.addEventListener('glider-animated', function() {
      window.clearInterval(slideTimeout);
      slide();
    });

    slide();
   }

   sliderAuto(myGlider, 4000)



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

    for (let titleItem of detailTitles) {
        titleItem.innerText = info.title;
    }
    detailDescription.innerText = info.description;

    // detailsImage.src = info.image;

    directoryContainer.style.display = "none";
    detailsView.style.display = "block";

    window.scrollTo(0, 0);
});
router.resolve();
