var loMasPedido = [
    {
        id: 4,
        nombre: "ECHEVERIA",
        url: "https://www.tuacasa.com.br/wp-content/uploads/2023/03/echeveria-elegans-1.png",
        precio: 140.00,
        descripcion: "La más bella de las suculentas con el más dócil de los cuidados",
        categoria: "Suculentas"
    },
    {
        id: 3,
        nombre: "ESFERA CERÁMICA",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/esfera-grande-fibra.jpg?resize=300%2C300&ssl=1",
        precio: 450.00,
        descripcion: "Una maceta perfecta para resaltar tus plantas",
        categoria: "Macetas de Cerámica"
    },
    {
        id: 4,
        nombre: "KIT DE HERRAMIENTAS",
        url: "https://as2.ftcdn.net/v2/jpg/02/65/10/51/1000_F_265105182_1kHISR3wzXYeADjOmnhU8lLvd6EyNxuE.jpg",
        precio: 550.00,
        descripcion: "Todo lo que necesitas para dar mantenimiento a tus preciadas plantas",
        categoria: "Herramientas de jardinería"
    },
    {
        id: 16,
        nombre: "VIOLETA",
        url: "https://thumbs.dreamstime.com/b/flores-violetas-de-saintpaulia-podridas-plantar-en-maceta-y-herramientas-jard%C3%ADn-para-plantas-macetas-tablas-madera-198059583.jpg",
        precio: 240.00,
        descripcion: "Planta de luz interior, una excelente opción si lo que buscas es tener una planta resistente y con mucho color",
        categoria: "Plantas de Interior"
    },
]

var plantas = [
    {
        id: 1,
        nombre: "SANSEVIERIA",
        url: "https://images.hola.com/imagenes/decoracion/20220818215417/sansevieria-trifasciata-cuidados-planta-interior-nu/1-126-655/Sansevieria-trifasciata-cuidados-t.jpg",
        precio: 140.00,
        descripcion: "Bonita y elegante, quedará ideal en la decoración interior de tu hogar",
        categoria: "Plantas de Interior"
    },
    {
        id: 2,
        nombre: "CROTÓ",
        url: "https://d3ugyf2ht6aenh.cloudfront.net/stores/913/526/products/croton-petra-31-ad0e57592d1a44fc4b16344203153457-1024-1024.webp",
        precio: 250.00,
        descripcion: "Es una de las plantas de interior que posee la mayor gama de colores vivos en sus hojas, requiere mucha luz",
        categoria: "Plantas de Interior"
    },
    {
        id: 3,
        nombre: "HELECHO BOSTON",
        url: "https://hips.hearstapps.com/es.h-cdn.co/mcres/images/media/images/helecho/1539006-1-esl-ES/helecho.jpg",
        precio: 180.00,
        descripcion: "Un bello ejemplar, de fácil mantenimiento y destacada capacidad para purificar el ambiente",
        categoria: "Plantas Purificadoras"
    },
    {
        id: 4,
        nombre: "ECHEVERIA",
        url: "https://www.tuacasa.com.br/wp-content/uploads/2023/03/echeveria-elegans-1.png",
        precio: 140.00,
        descripcion: "La más bella de las suculentas con el más dócil de los cuidados",
        categoria: "Suculentas"
    },
    {
        id: 5,
        nombre: "ECHEVERIA GOLD",
        url: "https://como-plantar.com/wp-content/uploads/2021/09/cuidar-y-cultivar-Echeveria-Peacockii.jpg.webp",
        precio: 200.00,
        descripcion: "Tu especie favorita de suculenta con un color sumamente especial",
        categoria: "Suculentas"
    },
    {
        id: 6,
        nombre: "KALANCHOE",
        url: "https://como-plantar.com/wp-content/uploads/2023/01/como-plantar-Flor-de-la-fortuna-o-Kalanchoe.jpg.webp",
        precio: 80.00,
        descripcion: "De luz abundante y riego moderado, sus flores son un estallido de color",
        categoria: "Plantas de Flores"
    },
    {
        id: 7,
        nombre: "BEGONIA",
        url: "https://h2.commercev3.net/cdn.brecks.com/images/800/75696.jpg",
        precio: 150.00,
        descripcion: "Una especie que destaca por sus hermosas flores y su vistoso follaje",
        categoria: "Plantas de Flores"
    },
    {
        id: 8,
        nombre: "CACTUS MINI",
        url: "https://como-plantar.com/wp-content/uploads/2021/09/cultivar-y-cuidar-cactus-oreja-de-conejo.jpg.webp",
        precio: 45.00,
        descripcion: "Una pequeña muestra del reino de las cactáceas, poco riego, ¡mucho sol!",
        categoria: "Cactus"
    },
    {
        id: 9,
        nombre: "MINI ROSA",
        url: "https://agronomaster.com/wp-content/uploads/2018/08/cuidado-de-las-rosas-en-macetas-1.jpg",
        precio: 50.00,
        descripcion: "Tipo de variedad del rosal que te fascinará por su tamaño y su amplia variedad de tonalidades",
        categoria: "Plantas de Flores"
    },
    {
        id: 10,
        nombre: "PEPEROMÍA",
        url: "https://como-plantar.com/wp-content/uploads/2023/03/cuidados-y-como-plantar-peperomia.jpg.webp",
        precio: 130.00,
        descripcion: "Es una planta de interior de lo más decorativa, gracias a sus frondosas ramas y a sus hojas bellas y originales",
        categoria: "Plantas de Interior"
    },
    {
        id: 11,
        nombre: "PALMA ARECA",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Palma-Areca-Gd.jpg?fit=1080%2C1080&ssl=1",
        precio: 250.00,
        descripcion: "Planta de interior, excelente para dar vida a tu sala de estar",
        categoria: "Plantas de Interior"
    },
    {
        id: 12,
        nombre: "MUÑECA",
        url: "https://hagearbeider.com/wp-content/uploads/2021/02/1612526530_480_Omsorg-for-den-vakre-cordyline-tango.jpg",
        precio: 240.00,
        descripcion: "Planta de sombra, da color a tus espacios con su tonalidad llamativa",
        categoria: "Plantas de Interior"
    },
    {
        id: 13,
        nombre: "ORQUÍDEAS",
        url: "https://editorialtelevisa.brightspotcdn.com/dims4/default/03eabb0/2147483647/strip/true/crop/1194x672+3+0/resize/1000x563!/quality/90/?url=https%3A%2F%2Fk2-prod-editorial-televisa.s3.amazonaws.com%2Fbrightspot%2Fwp-content%2Fuploads%2F2022%2F07%2Forquidea.jpg",
        precio: 750.00,
        descripcion: "Una planta que resalta por su elegancia y belleza, excelente para mostrarla en tu casa o en tu oficina",
        categoria: "Plantas de Flores"
    },
    {
        id: 14,
        nombre: "CALA",
        url: "https://http2.mlstatic.com/D_NQ_NP_601008-MLM51310325190_082022-O.webp",
        precio: 350.00,
        descripcion: "Planta de semisombra con colores llamativos apta para tu colección",
        categoria: "Plantas de Flores"
    },
    {
        id: 15,
        nombre: "ANTURIO",
        url: "https://www.elmueble.com/medio/2022/05/17/lilac-anturio_9317cc4d_674x674.jpeg",
        precio: 550.00,
        descripcion: "Planta de interior con una variedad de colores, es una opción excelente para dar vida a tu hogar",
        categoria: "Plantas de Interior"
    },
    {
        id: 16,
        nombre: "VIOLETA",
        url: "https://thumbs.dreamstime.com/b/flores-violetas-de-saintpaulia-podridas-plantar-en-maceta-y-herramientas-jard%C3%ADn-para-plantas-macetas-tablas-madera-198059583.jpg",
        precio: 240.00,
        descripcion: "Planta de luz interior, una excelente opción si lo que buscas es tener una planta resistente y con mucho color",
        categoria: "Plantas de Interior"
    },
];

var macetas = [
    {
        id: 1,
        nombre: "ESFERA BARRO",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Esfera-chica-barro.jpg?resize=300%2C300&ssl=1",
        precio: 250.00,
        descripcion: "Una maceta que enmarcará tus plantas más llamativas",
        categoria: "Macetas de Barro"
    },
    {
        id: 2,
        nombre: "TAZA BARRO",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Taza-chica.jpg?resize=300%2C300&ssl=1",
        precio: 200.00,
        descripcion: "Una maceta minimalista para tu espacio",
        categoria: "Macetas de Barro"
    },
    {
        id: 3,
        nombre: "ESFERA CERÁMICA",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/esfera-grande-fibra.jpg?resize=300%2C300&ssl=1",
        precio: 450.00,
        descripcion: "Una maceta perfecta para resaltar tus plantas",
        categoria: "Macetas de Cerámica"
    },
    {
        id: 4,
        nombre: "CUBO CERÁMICA",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/cubo-grande-fibra.jpg?resize=300%2C300&ssl=1",
        precio: 400.00,
        descripcion: "Dale el estilo a tu hogar con esta hermosa maceta",
        categoria: "Macetas de Cerámica"
    },
    {
        id: 5,
        nombre: "JARDINERA BARRO",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/Jardinera-Barro-1.jpg?resize=300%2C300&ssl=1",
        precio: 250.00,
        descripcion: "Jardinera de barro para los detalles minimalistas",
        categoria: "Macetas de barro"
    },
    {
        id: 6,
        nombre: "JARDINERA FIBRA DE VIDRIO",
        url: "https://i0.wp.com/plantify.mx/wp-content/uploads/2021/10/jardinera-fibra.jpg?resize=600%2C600&ssl=1",
        precio: 530.00,
        descripcion: "Jardinera elaborada con fibra de vidrio color negro",
        categoria: "Macetas de fibra de vidrio"
    },
];

var herramientas = [
    {
        id: 1,
        nombre: "FERTILIZANTE NITROFOSCA",
        url: "https://elheraldodemartinez.com.mx/images/Articulos2018/Articulo/2020/011Noviembre/28Nov/PAG-3-PRINCIPAL.png",
        precio: 250.00,
        descripcion: "Este fertilizante ayudará a que tu planta crezca saludable y tenga brotes nuevos",
        categoria: "Fertilizantes"
    },
    {
        id: 2,
        nombre: "FERTILIZANTE FLORIFIL",
        url: "https://chedrauimx.vtexassets.com/arquivos/ids/35879878-800-auto?v=638617759434270000&width=800&height=auto&aspect=true",
        precio: 250.00,
        descripcion: "Este fertilizante potenciará el desarrollo de flores en tus plantas",
        categoria: "Fertilizantes"
    },
    {
        id: 3,
        nombre: "SISTEMA DE RIEGO",
        url: "https://m.media-amazon.com/images/I/812q2D0i3sL._AC_UF1000,1000_QL80_.jpg",
        precio: 950.00,
        descripcion: "Es una herramienta que te permitirá regar de manera fácil y práctica hasta 30m de distancia",
        categoria: "Herramientas de riego"
    },
    {
        id: 4,
        nombre: "KIT DE HERRAMIENTAS",
        url: "https://as2.ftcdn.net/v2/jpg/02/65/10/51/1000_F_265105182_1kHISR3wzXYeADjOmnhU8lLvd6EyNxuE.jpg",
        precio: 550.00,
        descripcion: "Todo lo que necesitas para dar mantenimiento a tus preciadas plantas",
        categoria: "Herramientas de jardinería"
    },
    {
        id: 5,
        nombre: "CINTURÓN DE CUERO",
        url: "https://www.elblogdelatabla.com/wp-content/uploads/2020/11/cinturon-jardineria-herramientas-mano-florista-cuero-merifaLeather.jpg",
        precio: 450.00,
        descripcion: "Vuelve más fácil tu trabajo en la jardinería con ayuda de este cinturón perfecto para tus herramientas",
        categoria: "Accesorios de jardinería"
    },
    {
        id: 6,
        nombre: "MANGUERA DE RIEGO",
        url: "https://plasticforte.com/wp-content/uploads/2022/06/accesorios-jardineria-plasticforte.jpg",
        precio: 500.00,
        descripcion: "Para que tus plantas queden perfectamente regadas, utiliza nuestra manguera con soporte a pared",
        categoria: "Herramientas de riego"
    },
]


var carrito = []


//Buscar elementos en la BD de herramientas
export function buscarHerramientas(idHerramienta) {
    var result = herramientas.find(item => item.id === idHerramienta);
    return result;
}

export function buscarHerramientasName(idHerramienta) {
    var result = herramientas.find(item => item.nombre === idHerramienta);
    return result;
}

//Buscar elementos en la BD de plantas
export function buscarPlantasid(idPlanta) {
    var result = plantas.find(item => item.id === idPlanta);
    return result;
}

//Buscar elementos en la BD de plantas
export function buscarPlantasName(nombrePlanta) {
    var result = plantas.find(item => item.nombre === nombrePlanta);
    return result;
}

//Buscar elementos en la BD de macetas
export function buscarMacetas(idMacetas) {
    var result = macetas.find(item => item.id === idMacetas);
    return result;
}

export function buscarMacetasName(idMacetas) {
    var result = macetas.find(item => item.nombre === idMacetas);
    return result;
}

export function añadirPlanta(nombre, url, precio, descripcion) {
    let lastKey = Object.keys(plantas).pop();
    lastKey++;
    lastKey++;
    herramientas.push({ 'id': lastKey, 'nombre': nombre, 'url': url, 'precio': precio, 'descripcion': descripcion });
}


export function añadirMacetas(nombre, url, precio, descripcion) {
    let lastKey = Object.keys(macetas).pop();
    lastKey++;
    lastKey++;
    herramientas.push({ 'id': lastKey, 'nombre': nombre, 'url': url, 'precio': precio, 'descripcion': descripcion });
}

export function añadirHerramientas(nombre, url, precio, descripcion) {
    let lastKey = Object.keys(herramientas).pop();
    lastKey++;
    lastKey++;
    herramientas.push({ 'id': lastKey, 'nombre': nombre, 'url': url, 'precio': precio, 'descripcion': descripcion });
}

export function añadirCarrito(producto) {


    carrito = JSON.parse(localStorage.getItem('carrito')) ? JSON.parse(localStorage.getItem('carrito')) : [];
    console.log(producto)
    console.log('carrito' ,carrito)
    const isFound = carrito.some(element => {
        console.log('elemento' ,element)
        if (element.id === producto.id) {
            return true;
        }
        else return false;
    });

    if (isFound == false) {
        carrito.push(producto)
        producto.cantidad = 1;
    }
    else {
        console.log("This item already exists");
        const index = carrito.findIndex(object => {
            return object.id === producto.id;
        });
        carrito[index].cantidad++;
    }

    localStorage.setItem('carrito', JSON.stringify(carrito));

    console.log(carrito);
}


export { plantas };
export { macetas };
export { herramientas };
export { loMasPedido };
export {carrito};