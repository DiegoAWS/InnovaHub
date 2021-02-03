import MultiSelect2 from "../lib/multi-select2/multi-select2";

const myData = [
    { value: "taxonomy_1", label: "Agricultura" },
    { value: "taxonomy_2", label: "Automovilistico" },
    { value: "taxonomy_3", label: "I+D" },
    { value: "taxonomy_4", label: "Biotecnología" },
    { value: "taxonomy_5", label: "Aviación" },
    { value: "taxonomy_6", label: "Blockchain" },
    { value: "taxonomy_7", label: "Ciberseguridad" },
    { value: "taxonomy_8", label: "Asesoría/Consultoría" },
    { value: "taxonomy_9", label: "Bienes de Consumo y Servicios" },
    { value: "taxonomy_10", label: "Criptomonedas" },
    { value: "taxonomy_11", label: "Diseño / Imagen" },
    { value: "taxonomy_12", label: "Comercio Electrónico" },
    { value: "taxonomy_13", label: "Educación" },
    { value: "taxonomy_14", label: "Entretenimiento / Juegos" },
    { value: "taxonomy_15", label: "Moda" },
    { value: "taxonomy_16", label: "Finanzas / Tecnofinanzas" },
    { value: "taxonomy_17", label: "Comida / Bebidas" },
    { value: "taxonomy_18", label: "Hardware / IoT" },
    { value: "taxonomy_19", label: "Servicios de Salud" },
    { value: "taxonomy_20", label: "Bienestar / Salud Corporal" },
    { value: "taxonomy_21", label: "Hopedaje / Eventos" },
    { value: "taxonomy_22", label: "Recursos Humanos" },
    { value: "taxonomy_23", label: "Servicios / Tecnología Informática" },
    { value: "taxonomy_24", label: "Leyes / Servicios Legales" },
    { value: "taxonomy_25", label: "Manufactura / Industrias" },
    { value: "taxonomy_26", label: "Mercadotecnia / Publicidad / Ventas" },
    { value: "taxonomy_27", label: "Medios de Comunicación" },
    { value: "taxonomy_28", label: "Militar" },
    { value: "taxonomy_29", label: "Música" },
    { value: "taxonomy_30", label: "Nanotecnología" },
    { value: "taxonomy_31", label: "Sin ánimos de lucro" },
    { value: "taxonomy_32", label: "Petroleo / Energía / Materias Primas" },
    { value: "taxonomy_33", label: "Farmacéutico" },
    { value: "taxonomy_34", label: "Bienes Raices / Construcción" },
    { value: "taxonomy_35", label: "Medio Ambiente / Energía Renovable" },
    { value: "taxonomy_36", label: "Ventas al por Menor" },
    { value: "taxonomy_37", label: "SaaS" },
    { value: "taxonomy_38", label: "Semiconductores" },
    { value: "taxonomy_39", label: "Servicios" },
    { value: "taxonomy_40", label: "Deportes" },
    { value: "taxonomy_41", label: "Telecomunicaciones" },
    { value: "taxonomy_42", label: "Transportación " },
    { value: "taxonomy_43", label: "Viajes" },
    { value: "taxonomy_44", label: "Inversiones de Capital" },
    { value: "taxonomy_45", label: "Otros" }
];

let valuesSelect = [];
let mySelect = new MultiSelect2("#multiSelect2", {
    options: myData,
    value: [],
    multiple: true,
    autocomplete: true,
    icon: "fa fa-times",
    placeholder: "Categorías",
    onChange: value => {
        valuesSelect = value;
    }
});

let searchDirectoryButton = document.getElementById("searchDirectoryButton");
let searchName = document.getElementById("searchName");
if (searchDirectoryButton && searchName) {
    searchDirectoryButton.onclick = function() {
        console.log("search", searchName.value);
        console.log("Filter", valuesSelect);
    };
}
