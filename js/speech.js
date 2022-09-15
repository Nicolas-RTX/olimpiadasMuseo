let doc = document.querySelector('body');
let audioPlayer = document.querySelector('.audioPlayer')

let texto = "¡BIENVENIDOS AL MUSEO DE LANÚS!\nPLANEÁ TU VISITA\nVALOR DEL TICKET\nGENERAL ONLINE: 400 pesos\nGENERAL EN BOLETERIA: 500 pesos\nMENORES DE 13 AÑOS: GRATIS\nJubilados y pensionados (con carnet), Estudiantes universidades Nacionales (con libreta o certificadO de alumno regular) o personas con discapacidad:\nGRATIS\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Magni consequuntur placeat esse. Suscipit rerum atque tempore aliquid excepturi dolor iusto eaque quas? Ea, culpa! Deserunt eius fugit voluptatibus possimus quam dolores rem fuga ad, nostrum, aliquid a sunt necessitatibus quae similique totam numquam reiciendis ea atque, ex iure non architecto!\nHORARIO\nLUNES A JUEVES: 10:00 a 18:00\nVIERNES, SABADOS DOMINGOS Y FERIADOS: 15:00 a 18:00\nLOCALIZACIÓN\nDirección: 25 de Mayo 131, B1824 Lanús, Provincia de Buenos Aires\n\nDESDE CIUDAD DE BUENOS AIRES:\nEn tren\nnLorem ipsum dolor sit amet\nEn Omnibus\nLorem ipsum dolor sit amet\nEn auto\nnLorem ipsum dolor sit amet\nVISITAS GUIADAS AL PÚBLICO\nHorarios\nLunes a Jueves: 11:00, 15:00 y 18:00\nViernes a Domingos: 15:00 y 18:00\nFeriados: 15:00\n\nGratuita, con pago de entrada y sin inscripcion.\nLorem ipsum dolor sit amet\nVISITAS GUIADAS A ESCUELAS\nHorarios\nLunes a Jueves: 9:30, 14:00\nViernes: 11:00 y 15:00\n\nDestinada a nivel primario y secundario\nnLorem ipsum dolor sit amet\nCONTACTO\nDirección\n25 de Mayo 131 - B1824\nLanús - Provincia de Buenos Aires\nTelefono\n11 1234-5678\n Borrar Enviar";

let firstScroll = false;

document.addEventListener('click', function () {
    if (!firstScroll) {
        console.log("FirstScroll")
        VoiceRSS.speech({
            key: 'aa16252f380c4221aae2b6385f85b4e3',
            src: texto,
            hl: 'es-mx',
            v: 'Linda',
            r: 0,
            c: 'mp3',
            f: '44khz_16bit_stereo',
            ssml: false
        })

        firstScroll = true;
    }
})