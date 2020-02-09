<?php

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    
    public function run()
    {
        $departaments = [
            'Amazonas',
            'Antioquia',
            'Arauca',
            'Atlantico',
            'Bolivar',
            'Boyaca',
            'Caldas',
            'Caqueta',
            'Casanare',
            'Cauca',
            'Cesar',
            'Choco',
            'Cordoba',
            'Cundinamarca',
            'Guainia',
            'Guaviare',
            'Huila',
            'La Guajira',
            'Magdalena',
            'Meta',
            'Nariño',
            'Norte Santander',
            'Putumayo',
            'Quindio',
            'Risaralda',
            'San Andres',
            'Santander',
            'Sucre',
            'Tolima',
            'Valle del Cauca',
            'Vaupes',
            'Vichada',
        ];

        $amazona = [
            'Leticia',
            'Puerto Nariño',
        ];

        $antioquia = [
            'Barbosa', 'Girardota', 'Copacabana', 'Bello', 'Medellín', 'Envigado', 'Itagüí', 'Sabaneta', 'La Estrella y Caldas', 'Caucasia', 'El Bagre', 'Nechí', 'Tarazá', 'Cáceres y Zaragoza', 'Caracolí', 'Maceo', 'Puerto Berrío', 'Puerto Nare', 'Puerto Triunfo y Yondó', 'Cisneros', 'San Roque', 'Santo Domingo', 'Amalfi', 'Vegachí', 'Yalí', 'Yolombó', 'Segovia', 'Remedios y Anorí', 'Santa Rosa de Osos', 'San Pedro de los Milagros', 'San José de la Montaña', 'Donmatías', 'Entrerríos', 'Belmira', 'Carolina del Príncipe', 'Gómez Plata', 'Guadalupe', 'Yarumal', 'Angostura', 'Ituango', 'Toledo', 'Briceño', 'San Andrés de Cuerquia', 'Campamento y Valdivia', 'Anzá', 'Armenia', 'Buritica', 'Caicedo', 'Ebéjico', 'Heliconia', 'Liborina', 'Olaya', 'Sabanalarga', 'San Jerónimo', 'Santa Fe de Antioquia', 'Sopetrán', 'Abriaquí', 'Cañasgordas', 'Dabeiba', 'Frontino', 'Giraldo', 'Peque y Uramita',
            'El Carmen de Viboral', 'El Retiro', 'Santuario', 'Guarne', 'La Ceja', 'La Unión', 'Marinilla', 'Rionegro', 'San Vicente', 'Alejandría', 'Concepción', 'El Peñol', 'Granada', 'Guatapé', 'San Carlos', 'San Rafael', 'Sonsón', 'Nariño', 'Argelia', 'Abejorral',
            'Cocorná', 'San Francisco y San Luis', 'Amagá', 'Andes', 'Angelópolis', 'Betania', 'Betulia', 'Caramanta', 'Ciudad Bolívar', 'Concordia', 'Fredonia', 'Hispania', 'Jardín', 'Jericó', 'La Pintada', 'Montebello', 'Pueblorrico', 'Salgar', 'Santa Bárbara', 'Támesis', 'Tarso', 'Titiribí', 'Urrao', 'Valparaíso y Venecia',
            'Apartado', 'Carepa', 'Chigorodó', 'Turbo', 'Arboletes', 'Necoclí', 'San Juan de Urabá', 'San Pedro de Urabá', 'Murindó', 'Mutatá y Vigía del Fuerte',
        ];

        $arauca = [
            'Arauca',
            'Arauquita',
            'Cravo Norte',
            'Fortul',
            'Puerto Rondón',
            'Saravena',
            'Tame',
        ];

        $atlantico = [
            'Baranoa',
            'Barranquilla',
            'Campo de la Cruz',
            'Candelaria',
            'Galapa',
            'Juan de Acosta',
            'Luruaco',
            'Malambo',
            'Manatí',
            'Palmar de Varela',
            'Piojó',
            'Polonuevo',
            'Ponedera',
            'Puerto Colombia',
            'Repelón',
            'Sabanagrande',
            'Sabanalarga',
            'Santa Lucía',
            'Santo Tomás',
            'Soledad',
            'Suán',
            'Tubará',
            'Usiacurí',
        ];

        $bolivar = [
            'Achí',
            'Altos del Rosario',
            'Arenal',
            'Arjona',
            'Arroyohondo',
            'Barranco de Loba',
            'Brazuelo de Papayal',
            'Calamar',
            'Cantagallo',
            'Cartagena de Indias',
            'Cicuco',
            'Clemencia',
            'Córdoba',
            'El Carmen de Bolívar',
            'El Guamo',
            'El Peñón',
            'Hatillo de Loba',
            'Magangué',
            'Mahates',
            'Margarita',
            'María la Baja',
            'Mompós',
            'Montecristo',
            'Morales',
            'Norosí',
            'Pinillos',
            'Regidor',
            'Río Viejo',
            'San Cristóbal',
            'San Estanislao',
            'San Fernando',
            'San Jacinto del Cauca',
            'San Jacinto',
            'San Juan Nepomuceno',
            'San Martín de Loba',
            'San Pablo',
            'Santa Catalina',
            'Santa Rosa',
            'Santa Rosa del Sur',
            'Simití',
            'Soplaviento',
            'Talaigua Nuevo',
            'Tiquisio',
            'Turbaco',
            'Turbaná',
            'Villanueva',
            'Zambrano',
        ];

        $boyaca = [
            'Almeida',
            'Aquitania',
            'Arcabuco',
            'Belén',
            'Berbeo',
            'Betéitiva',
            'Boavita',
            'Boyacá',
            'Briceño',
            'Buenavista',
            'Busbanzá',
            'Caldas',
            'Campohermoso',
            'Cerinza',
            'Chinavita',
            'Chiquinquirá',
            'Chíquiza',
            'Chiscas',
            'Chita',
            'Chitaraque',
            'Chivatá',
            'Chivor',
            'Ciénega',
            'Cómbita',
            'Coper',
            'Corrales',
            'Covarachía',
            'Cubará',
            'Cucaita',
            'Cuítiva',
            'Duitama',
            'El Cocuy',
            'El Espino',
            'Firavitoba',
            'Floresta',
            'Gachantivá',
            'Gámeza',
            'Garagoa',
            'Guacamayas',
            'Guateque',
            'Guayatá',
            'Güicán',
            'Iza',
            'Jenesano',
            'Jericó',
            'La Capilla',
            'La Uvita',
            'La Victoria',
            'Labranzagrande',
            'Macanal',
            'Maripí',
            'Miraflores',
            'Mongua',
            'Monguí',
            'Moniquirá',
            'Motavita',
            'Muzo',
            'Nobsa',
            'Nuevo Colón',
            'Oicatá',
            'Otanche',
            'Pachavita',
            'Páez',
            'Paipa',
            'Pajarito',
            'Panqueba',
            'Pauna',
            'Paya',
            'Paz del Río',
            'Pesca',
            'Pisba',
            'Puerto Boyacá',
            'Quípama',
            'Ramiriquí',
            'Ráquira',
            'Rondón',
            'Saboyá',
            'Sáchica',
            'Samacá',
            'San Eduardo',
            'San José de Pare',
            'San Luis de Gaceno',
            'San Mateo',
            'San Miguel de Sema',
            'San Pablo de Borbur',
            'Santa María',
            'Santa Rosa de Viterbo',
            'Santa Sofía',
            'Santana',
            'Sativanorte',
            'Sativasur',
            'Siachoque',
            'Soatá',
            'Socha',
            'Socotá',
            'Sogamoso',
            'Somondoco',
            'Sora',
            'Soracá',
            'Sotaquirá',
            'Susacón',
            'Sutamarchán',
            'Sutatenza',
            'Tasco',
            'Tenza',
            'Tibaná',
            'Tibasosa',
            'Tinjacá',
            'Tipacoque',
            'Toca',
            'Togüí',
            'Tópaga',
            'Tota',
            'Tunja',
            'Tununguá',
            'Turmequé',
            'Tuta',
            'Tutazá',
            'Úmbita',
            'Ventaquemada',
            'Villa de Leyva',
            'Viracachá',
            'Zetaquira',
        ];

        $caldas = [
            'Aguadas',
            'Anserma',
            'Aranzazu',
            'Belalcázar',
            'Chinchiná',
            'Filadelfia',
            'La Dorada',
            'La Merced',
            'Manizales',
            'Manzanares',
            'Marmato',
            'Marquetalia',
            'Marulanda',
            'Neira',
            'Norcasia',
            'Pácora',
            'Palestina',
            'Pensilvania',
            'Riosucio',
            'Risaralda',
            'Salamina',
            'Samaná',
            'San José',
            'Supía',
            'Victoria',
            'Villamaría',
            'Viterbo',

        ];

        $caqueta = [
            'Albania',
            'Belén de los Andaquíes',
            'Cartagena del Chairá',
            'Curillo',
            'El Doncello',
            'El Paujil',
            'Florencia',
            'La Montañita',
            'Milán',
            'Morelia',
            'Puerto Rico',
            'San José del Fragua',
            'San Vicente del Caguán',
            'Solano',
            'Solita',
            'Valparaíso',
        ];

        $casanare = [
            'Aguazul',
            'Chámeza',
            'Hato Corozal',
            'La Salina',
            'Maní',
            'Monterrey',
            'Nunchía',
            'Orocué',
            'Paz de Ariporo',
            'Pore',
            'Recetor',
            'Sabanalarga',
            'Sácama',
            'San Luis de Palenque',
            'Támara',
            'Tauramena',
            'Trinidad',
            'Villanueva',
            'Yopal',
        ];

        $cauca = [
            'Almaguer',
            'Argelia',
            'Balboa',
            'Bolívar',
            'Buenos Aires',
            'Cajibío',
            'Caldono',
            'Caloto',
            'Corinto',
            'El Tambo',
            'Florencia',
            'Guachené',
            'Guapí',
            'Inzá',
            'Jambaló',
            'La Sierra',
            'La Vega',
            'López de Micay',
            'Mercaderes',
            'Miranda',
            'Morales',
            'Padilla',
            'Páez',
            'Patía',
            'Piamonte',
            'Piendamó',
            'Popayán',
            'Puerto Tejada',
            'Puracé',
            'Rosas',
            'San Sebastián',
            'Santa Rosa',
            'Santander de Quilichao',
            'Silvia',
            'Sotará',
            'Suárez',
            'Sucre',
            'Timbío',
            'Timbiquí',
            'Toribío',
            'Totoró',
            'Villa Rica',
        ];

        $cesar = [
            'Aguachica',
            'Agustín Codazzi',
            'Astrea',
            'Becerril',
            'Bosconia',
            'Chimichagua',
            'Chiriguaná',
            'Curumaní',
            'El Copey',
            'El Paso',
            'Gamarra',
            'González',
            'La Gloria (Cesar)',
            'La Jagua de Ibirico',
            'La Paz',
            'Manaure Balcón del Cesar',
            'Pailitas',
            'Pelaya',
            'Pueblo Bello',
            'Río de Oro',
            'San Alberto',
            'San Diego',
            'San Martín',
            'Tamalameque',
            'Valledupar',
        ];

        $choco = [
            'Acandí',
            'Alto Baudó',
            'Bagadó',
            'Bahía Solano',
            'Bajo Baudó',
            'Bojayá',
            'Cantón de San Pablo',
            'Cértegui',
            'Condoto',
            'El Atrato',
            'El Carmen de Atrato',
            'El Carmen del Darién',
            'Istmina',
            'Juradó',
            'Litoral de San Juan',
            'Lloró',
            'Medio Atrato',
            'Medio Baudó',
            'Medio San Juan',
            'Nóvita',
            'Nuquí',
            'Quibdó',
            'Río Iró',
            'Río Quito',
            'Riosucio',
            'San José del Palmar',
            'Sipí',
            'Tadó',
            'Unión Panamericana',
            'Unguía',
        ];

        $cordoba = [
            'Ayapel',
            'Buenavista',
            'Canalete',
            'Cereté',
            'Chimá',
            'Chinú',
            'Ciénaga de Oro',
            'Cotorra',
            'La Apartada',
            'Lorica',
            'Los Córdobas',
            'Momil',
            'Montelíbano',
            'Montería',
            'Moñitos',
            'Planeta Rica',
            'Pueblo Nuevo',
            'Puerto Escondido',
            'Puerto Libertador',
            'Purísima',
            'Sahagún',
            'San Andrés de Sotavento',
            'San Antero',
            'San Bernardo del Viento',
            'San Carlos',
            'San José de Uré',
            'San Pelayo',
            'Tierralta',
            'Tuchín',
            'Valencia',
        ];

        $cundinamarca = [
            'Agua de Dios',
            'Albán',
            'Anapoima',
            'Anolaima',
            'Apulo',
            'Arbeláez',
            'Beltrán',
            'Bituima',
            'Bogotá',
            'Bojacá',
            'Cabrera',
            'Cachipay',
            'Cajicá',
            'Caparrapí',
            'Cáqueza',
            'Carmen de Carupa',
            'Chaguaní',
            'Chía',
            'Chipaque',
            'Choachí',
            'Chocontá',
            'Cogua',
            'Cota',
            'Cucunubá',
            'El Colegio',
            'El Peñón',
            'El Rosal',
            'Facatativá',
            'Fómeque',
            'Fosca',
            'Funza',
            'Fúquene',
            'Fusagasugá',
            'Gachalá',
            'Gachancipá',
            'Gachetá',
            'Gama',
            'Girardot',
            'Granada',
            'Guachetá',
            'Guaduas',
            'Guasca',
            'Guataquí',
            'Guatavita',
            'Guayabal de Síquima',
            'Guayabetal',
            'Gutiérrez',
            'Jerusalén',
            'Junín',
            'La Calera',
            'La Mesa',
            'La Palma',
            'La Peña',
            'La Vega',
            'Lenguazaque',
            'Machetá',
            'Madrid',
            'Manta',
            'Medina',
            'Mosquera',
            'Nariño',
            'Nemocón',
            'Nilo',
            'Nimaima',
            'Nocaima',
            'Pacho',
            'Paime',
            'Pandi',
            'Paratebueno',
            'Pasca',
            'Puerto Salgar',
            'Pulí',
            'Quebradanegra',
            'Quetame',
            'Quipile',
            'Ricaurte',
            'San Antonio del Tequendama',
            'San Bernardo',
            'San Cayetano',
            'San Francisco',
            'San Juan de Rioseco',
            'Sasaima',
            'Sesquilé',
            'Sibaté',
            'Silvania',
            'Simijaca',
            'Soacha',
            'Sopó',
            'Subachoque',
            'Suesca',
            'Supatá',
            'Susa',
            'Sutatausa',
            'Tabio',
            'Tausa',
            'Tena',
            'Tenjo',
            'Tibacuy',
            'Tibirita',
            'Tocaima',
            'Tocancipá',
            'Topaipí',
            'Ubalá',
            'Ubaque',
            'Ubaté',
            'Une',
            'Útica',
            'Venecia',
            'Vergara',
            'Vianí',
            'Villagómez',
            'Villapinzón',
            'Villeta',
            'Viotá',
            'Yacopí',
            'Zipacón',
            'Zipaquirá',
        ];

        $guainia = [
            'Inírida',
        ];

        $guaviare = [
            'Calamar',
            'El Retorno',
            'Miraflores',
            'San José del Guaviare',
        ];

        $huila = [
            'Acevedo',
            'Agrado',
            'Aipe',
            'Algeciras',
            'Altamira',
            'Baraya',
            'Campoalegre',
            'Colombia',
            'El Pital',
            'Elías',
            'Garzón',
            'Gigante',
            'Guadalupe',
            'Hobo',
            'Íquira',
            'Isnos',
            'La Argentina',
            'La Plata',
            'Nátaga',
            'Neiva',
            'Oporapa',
            'Paicol',
            'Palermo',
            'Palestina',
            'Pitalito',
            'Rivera',
            'Saladoblanco',
            'San Agustín',
            'Santa María',
            'Suaza',
            'Tarqui',
            'Tello',
            'Teruel',
            'Tesalia',
            'Timaná',
            'Villavieja',
            'Yaguará',
        ];

        $guajira = [
            'Albania',
            'Barrancas',
            'Dibulla',
            'Distracción',
            'El Molino',
            'Fonseca',
            'Hatonuevo',
            'La Jagua del Pilar',
            'Maicao',
            'Manaure',
            'Riohacha',
            'San Juan del Cesar',
            'Uribia',
            'Urumita',
            'Villanueva',
        ];

        $magdalena = [
            'Algarrobo',
            'Aracataca',
            'Ariguaní',
            'Cerro de San Antonio',
            'Chibolo',
            'Chibolo',
            'Ciénaga',
            'Concordia',
            'El Banco',
            'El Piñón',
            'El Retén',
            'Fundación',
            'Guamal',
            'Nueva Granada',
            'Pedraza',
            'Pijiño del Carmen',
            'Pivijay',
            'Plato',
            'Pueblo Viejo',
            'Remolino',
            'Sabanas de San Ángel',
            'Salamina',
            'San Sebastián de Buenavista',
            'San Zenón',
            'Santa Ana',
            'Santa Bárbara de Pinto',
            'Santa Marta',
            'Sitionuevo',
            'Tenerife',
            'Zapayán',
            'Zona Bananera',
        ];

        $meta = [
            'Acacías',
            'Barranca de Upía',
            'Cabuyaro',
            'Castilla la Nueva',
            'Cubarral',
            'Cumaral',
            'El Calvario',
            'El Castillo',
            'El Dorado',
            'Fuente de Oro',
            'Granada',
            'Guamal',
            'La Macarena',
            'La Uribe',
            'Lejanías',
            'Mapiripán',
            'Mesetas',
            'Puerto Concordia',
            'Puerto Gaitán',
            'Puerto Lleras',
            'Puerto López',
            'Puerto Rico',
            'Restrepo',
            'San Carlos de Guaroa',
            'San Juan de Arama',
            'San Juanito',
            'San Martín',
            'Villavicencio',
            'Vista Hermosa',
        ];

        $nariño = [
            'Aldana',
            'Ancuyá',
            'Arboleda',
            'Barbacoas',
            'Belén',
            'Buesaco',
            'Chachagüí',
            'Colón',
            'Consacá',
            'Contadero',
            'Córdoba',
            'Cuaspud',
            'Cumbal',
            'Cumbitara',
            'El Charco',
            'El Peñol',
            'El Rosario',
            'El Tablón',
            'El Tambo',
            'Francisco Pizarro',
            'Funes',
            'Guachucal',
            'Guaitarilla',
            'Gualmatán',
            'Iles',
            'Imués',
            'Ipiales',
            'La Cruz',
            'La Florida',
            'La Llanada',
            'La Tola',
            'La Unión',
            'Leiva',
            'Linares',
            'Los Andes',
            'Magüí Payán',
            'Mallama',
            'Mosquera',
            'Nariño',
            'Olaya Herrera',
            'Ospina',
            'Pasto',
            'Policarpa',
            'Potosí',
            'Providencia',
            'Puerres',
            'Pupiales',
            'Ricaurte',
            'Roberto Payán',
            'Samaniego',
            'San Bernardo',
            'San José de Albán',
            'San Lorenzo',
            'San Pablo',
            'San Pedro de Cartago',
            'Sandoná',
            'Santa Bárbara',
            'Santacruz',
            'Sapuyes',
            'Taminango',
            'Tangua',
            'Tumaco',
            'Túquerres',
            'Yacuanquer',
        ];

        $norte_santander = [
            'Ábrego',
            'Arboledas',
            'Bochalema',
            'Bucarasica',
            'Cáchira',
            'Cácota',
            'Chinácota',
            'Chitagá',
            'Convención',
            'Cúcuta',
            'Cucutilla',
            'Duranía',
            'El Carmen',
            'El Tarra',
            'El Zulia',
            'Gramalote',
            'Hacarí',
            'Herrán',
            'La Esperanza',
            'La Playa de Belén',
            'Labateca',
            'Los Patios',
            'Lourdes',
            'Mutiscua',
            'Ocaña',
            'Pamplona',
            'Pamplonita',
            'Puerto Santander',
            'Ragonvalia',
            'Salazar de Las Palmas',
            'San Calixto',
            'San Cayetano',
            'Santiago',
            'Santo Domingo de Silos',
            'Sardinata',
            'Teorama',
            'Tibú',
            'Toledo',
            'Villa Caro',
            'Villa del Rosario',
        ];

        $putumayo = [
            'Colón',
            'Mocoa',
            'Orito',
            'Puerto Asís',
            'Puerto Caicedo',
            'Puerto Guzmán',
            'Puerto Leguízamo',
            'San Francisco',
            'San Miguel',
            'Santiago',
            'Sibundoy',
            'Valle del Guamuez',
            'Villagarzón',
        ];

        $quindio = [
            'Armenia',
            'Buenavista',
            'Calarcá',
            'Circasia',
            'Córdoba',
            'Filandia',
            'Génova',
            'La Tebaida',
            'Montenegro',
            'Pijao',
            'Quimbaya',
            'Salento',
        ];

        $risaralda = [
            'Apía',
            'Balboa',
            'Belén de Umbría',
            'Dosquebradas',
            'Guática',
            'La Celia',
            'La Virginia',
            'Marsella',
            'Mistrató',
            'Pereira',
            'Pueblo Rico',
            'Quinchía',
            'Santa Rosa de Cabal',
            'Santuario',
        ];

        $san_andres = [
            'Providencia y Santa Catalina Islas',
            'San Andrés',
        ];

        $santander = [
            'Aguada',
            'Albania',
            'Aratoca',
            'Barbosa',
            'Barichara',
            'Barrancabermeja',
            'Betulia',
            'Bolívar',
            'Bucaramanga',
            'Cabrera',
            'California',
            'Capitanejo',
            'Carcasí',
            'Cepitá',
            'Cerrito',
            'Charalá',
            'Charta',
            'Chima',
            'Chipatá',
            'Cimitarra',
            'Concepción',
            'Confines',
            'Contratación',
            'Coromoro',
            'Curití',
            'El Carmen de Chucurí',
            'El Guacamayo',
            'El Peñón',
            'El Playón',
            'El Socorro',
            'Encino',
            'Enciso',
            'Florián',
            'Floridablanca',
            'Galán',
            'Gámbita',
            'Girón',
            'Guaca',
            'Guadalupe',
            'Guapotá',
            'Guavatá',
            'Güepsa',
            'Hato',
            'Jesús María',
            'Jordán',
            'La Belleza',
            'La Paz',
            'Landázuri',
            'Lebrija',
            'Los Santos',
            'Macaravita',
            'Málaga',
            'Matanza',
            'Mogotes',
            'Molagavita',
            'Ocamonte',
            'Oiba',
            'Onzaga',
            'Palmar',
            'Palmas del Socorro',
            'Páramo',
            'Piedecuesta',
            'Pinchote',
            'Puente Nacional',
            'Puerto Parra',
            'Puerto Wilches',
            'Rionegro',
            'Sabana de Torres',
            'San Andrés',
            'San Benito',
            'San Gil',
            'San Joaquín',
            'San José de Miranda',
            'San Miguel',
            'San Vicente de Chucurí',
            'Santa Bárbara',
            'Santa Helena del Opón',
            'Simacota',
            'Suaita',
            'Sucre',
            'Suratá',
            'Tona',
            'Valle de San José',
            'Vélez',
            'Vetas',
            'Villanueva',
            'Zapatoca',
        ];

        $sucre = [
            'Buenavista',
            'Caimito',
            'Chalán',
            'Colosó',
            'Corozal',
            'Coveñas',
            'El Roble',
            'Galeras',
            'Guaranda',
            'La Unión',
            'Los Palmitos',
            'Majagual',
            'Morroa',
            'Ovejas',
            'Sampués',
            'San Antonio de Palmito',
            'San Benito Abad',
            'San Juan de Betulia',
            'San Marcos',
            'San Onofre',
            'San Pedro',
            'Sincé',
            'Sincelejo',
            'Sucre',
            'Tolú',
            'Tolú Viejo',
        ];

        $tolima = [
            'Alpujarra',
            'Alvarado',
            'Ambalema',
            'Anzoátegui',
            'Armero',
            'Ataco',
            'Cajamarca',
            'Carmen de Apicalá',
            'Casabianca',
            'Chaparral',
            'Coello',
            'Coyaima',
            'Cunday',
            'Dolores',
            'El Espinal',
            'Falán',
            'Flandes',
            'Fresno',
            'Guamo',
            'Herveo',
            'Honda',
            'Ibagué',
            'Icononzo',
            'Lérida',
            'Líbano',
            'Mariquita',
            'Melgar',
            'Murillo',
            'Natagaima',
            'Ortega',
            'Palocabildo',
            'Piedras',
            'Planadas',
            'Prado',
            'Purificación',
            'Rioblanco',
            'Roncesvalles',
            'Rovira',
            'Saldaña',
            'San Antonio',
            'San Luis',
            'Santa Isabel',
            'Suárez',
            'Valle de San Juan',
            'Venadillo',
            'Villahermosa',
            'Villarrica',
        ];

        $valleDelCauca = [
            'Alcalá',
            'Andalucía',
            'Ansermanuevo',
            'Argelia',
            'Bolívar',
            'Buenaventura',
            'Buga',
            'Bugalagrande',
            'Caicedonia',
            'Cali',
            'Calima',
            'Candelaria',
            'Cartago',
            'Dagua',
            'El Águila',
            'El Cairo',
            'El Cerrito',
            'El Dovio',
            'Florida',
            'Ginebra',
            'Guacarí',
            'Jamundí',
            'La Cumbre',
            'La Unión',
            'La Victoria',
            'Obando',
            'Palmira',
            'Pradera',
            'Restrepo',
            'Riofrío',
            'Roldanillo',
            'San Pedro',
            'Sevilla',
            'Toro',
            'Trujillo',
            'Tuluá',
            'Ulloa',
            'Versalles',
            'Vijes',
            'Yotoco',
            'Yumbo',
            'Zarzal',
        ];

        $vaupes = [
            'Carurú',
            'Mitú',
            'Taraira',
        ];
        $vichada = [
            'Cumaribo',
            'La Primavera',
            'Puerto Carreño',
            'Santa Rosalía',
        ];

        foreach ($departaments as $departament) {
            $d = new Departamento;
            $d->nombre_departamento = $departament;
            $d->save();

            if ($d->nombre_departamento == 'Amazonas') {
                foreach ($amazona as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Antioquia') {
                foreach ($antioquia as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Arauca') {
                foreach ($arauca as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Atlantico') {
                foreach ($atlantico as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Bolivar') {
                foreach ($bolivar as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Boyaca') {
                foreach ($boyaca as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Caldas') {
                foreach ($caldas as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Caqueta') {
                foreach ($caqueta as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Casanare') {
                foreach ($casanare as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Cauca') {
                foreach ($cauca as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Cesar') {
                foreach ($cesar as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Choco') {
                foreach ($choco as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Cordoba') {
                foreach ($cordoba as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Cundinamarca') {
                foreach ($cundinamarca as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Guainia') {
                foreach ($guainia as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Guaviare') {
                foreach ($guaviare as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Huila') {
                foreach ($huila as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'La Guajira') {
                foreach ($guajira as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Magdalena') {
                foreach ($magdalena as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Meta') {
                foreach ($meta as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Nariño') {
                foreach ($nariño as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Norte Santander') {
                foreach ($norte_santander as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Putumayo') {
                foreach ($putumayo as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Quindio') {
                foreach ($quindio as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Risaralda') {
                foreach ($risaralda as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'San Andres') {
                foreach ($san_andres as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Santander') {
                foreach ($santander as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Sucre') {
                foreach ($sucre as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Tolima') {
                foreach ($tolima as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Valle del Cauca') {
                foreach ($valleDelCauca as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Vaupes') {
                foreach ($vaupes as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }

            if ($d->nombre_departamento == 'Vichada') {
                foreach ($vichada as $municipio) {
                    Municipio::create(['nombre_municipio' => $municipio, 'departamento_id' => $d->id]);
                }
            }
        }

    }
}
