<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\User;
use App\Models\Ley;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;
use App\Models\Item;
use App\Models\Paragrafo;
use App\Models\Nota;

class DatabaseSeeder extends Seeder
{
    
    private $arrayLeyes=array(
         array(
            'idley' => '100',
            'ley' => '842 de 2003',
            'imagen' => 'imagenes/842_2003.png',
	 		'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
	 	),
	 	array(
            'idley' => '101',
            'ley' => '843 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
	 		'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
	 	),
	 	array(
            'idley' => '102',
            'ley' => '844 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
	 		'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
	 	),
	 	array(
            'idley' => '103',
            'ley' => '845 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
	 		'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
	 	)
    );
  
    private $titulos = array(
		array(
			'idtitulo' => '400',
            'nombre' => 'TITULO I.',
            'descripcion' =>'GENERALIDADES.',
            'idley' => '100'),
        array(
            'idtitulo' => '401',
            'nombre' => 'TITULO II.',
            'descripcion' =>'EJERCICIO DE LA INGENIERIA, DE SUS PROFESIONES AFINES Y DE SUS PROFESIONES AUXILIARES.',
            'idley' => '100'),
        array(
            'idtitulo' => '402',
            'nombre' => 'TITULO III.',
            'descripcion' =>'DEL CONSEJO PROFESIONAL NACIONAL DE INGENIERIA Y SUS CORRESPONDIENTES REGIONALES O SECCIONALES.', 
            'idley' => '100'),
        array(
            'idtitulo' => '403',
            'nombre' => 'TITULO IV.',
            'descripcion' =>'CODIGO DE ÉTICA PARA EL EJERCICIO DE LA INGENIERIA EN GENERAL Y SUS PROFESIONES AFINES Y AUXILIARES.', 
            'idley' => '100'),
        array(
            'idtitulo' => '404',
            'nombre' => 'TITULO V.',
            'descripcion' =>'REGIMEN DISCIPLINARIO.',
            'idley' => '100'),
        array(
            'idtitulo' => '405',
            'nombre' => 'TITULO VI.',
            'descripcion' =>'DISPOSICIONES FINALES.', 
            'idley' => '100')
    );

    private $capitulos = array(
		array(
			'idcapitulo' => '01',
            'nombre' => 'CAPITULO I.',
            'descripcion' => 'DEFINICIÓN Y ALCANCES.',
            'idtitulo' => '400'),
        array(
            'idcapitulo' => '02',
            'nombre' => 'CAPITULO I.',
            'descripcion' => 'REQUISITOS PARA EJERCER LA INGENIERÍA, SUS PROFESIONES AFINES Y SUS PROFESIONES AUXILIARES.',
            'idtitulo' => '401'),
        array(
            'idcapitulo' => '03',
            'nombre' => 'CAPITULO II.',
            'descripcion' => 'DEL EJERCICIO ILEGAL DE LA INGENIERÍA Y DE SUS PROFESIONES AFINES Y AUXILIARES.',
            'idtitulo' => '401'),
        array(
            'idcapitulo' => '04',
            'nombre' => 'CAPITULO III.',
            'descripcion' => 'DE LOS PROFESIONALES EXTRANJEROS.',
            'idtitulo' => '401'),
        array(
            'idcapitulo' => '05',
            'nombre' => 'CAPITULO I.',
            'descripcion' => 'DENOMINACIÓN, NATURALEZA JURÍDICA, INTEGRACIÓN Y FUNCIONES.',
            'idtitulo' => '402'),
        array(
            'idcapitulo' => '06',
            'nombre' => 'CAPITULO II.',
            'descripcion' => 'DE LOS CONSEJOS REGIONALES O SECCIONALES.',
            'idtitulo' => '402'),
        array(
            'idcapitulo' => '07',
            'nombre' => 'CAPITULO I.',
            'descripcion' => 'DISPOSICIONES GENERALES.',
            'idtitulo' => '403'),
        array(
            'idcapitulo' => '08',
            'nombre' => 'CAPITULO II.',
            'descripcion' => 'DE LOS DEBERES Y OBLIGACIONES DE LOS PROFESIONALES.',
            'idtitulo' => '403'),
        array(
            'idcapitulo' => '09',
            'nombre' => 'CAPITULO III.',
            'descripcion' => 'DE LAS INHABILIDADES E INCOMPATIBILIDADES DE LOS PROFESIONALES EN EL EJERCICIO DE LA PROFESIÓN.',
            'idtitulo' => '403'),
        array(
            'idcapitulo' => '10',
            'nombre' => 'CAPITULO I.',
            'descripcion' => 'DEFINICIÓN, PRINCIPIOS Y SANCIONES.',
            'idtitulo' => '404'),
        array(
            'idcapitulo' => '11',
            'nombre' => 'CAPITULO II.',
            'descripcion' => 'PROCEDIMIENTO DISCIPLINARIO.',
            'idtitulo' => '404')
        
    );
    
    private $articulos = array(
		array(
			'idarticulo' => '20',
            'nombre' => 'ARTÍCULO 1o. CONCEPTO DE INGENIERÍA.',
            'descripcion' => 'Se entiende por ingeniería toda aplicación de las ciencias físicas, químicas y matemáticas; de la técnica industrial y en general, del ingenio humano, a la utilización e invención sobre la materia.', 
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '21',
            'nombre' => 'ARTÍCULO 2o. EJERCICIO DE LA INGENIERÍA.',
            'descripcion' => 'Para los efectos de la presente ley, se entiende como ejercicio de la ingeniería, el desempeño de actividades tales como:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '22',
            'nombre' => 'ARTÍCULO 3o. PROFESIONES AUXILIARES DE LA INGENIERÍA.',
            'descripcion' =>' Se entiende por Profesiones Auxiliares de la Ingeniería, aquellas actividades que se ejercen en nivel medio, como auxiliares de los ingenieros, amparadas por un título académico en las modalidades educativas de formación técnica y tecnológica profesional, conferido por instituciones de educación superior legalmente autorizadas, tales como: Técnicos y tecnólogos en obras civiles, técnicos y tecnólogos laboratoristas, técnicos y tecnólogos constructores, técnicos y tecnólogos en topografía, técnicos y tecnólogos en minas, técnicos y tecnólogos delineantes en ingeniería, técnicos y tecnólogos en sistemas o en computación, analistas de sistemas y programadores, técnicos y tecnólogos en alimentos, técnicos y tecnólogos industriales, técnicos y tecnólogos hidráulicos y sanitarios, técnicos y tecnólogos teleinformáticos, técnicos y tecnólogos agroindustriales y los maestros de obras de construcción en sus diversas modalidades, que demuestren una experiencia de más de diez (10) años en actividades de la construcción, mediante certificaciones expedidas por ingenieros y/o arquitectos debidamente matriculados y, excepcionalmente, por las autoridades de obras públicas y/o de planeación, municipales.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '23',
            'nombre' => 'ARTÍCULO 4o. PROFESIONES AFINES.',
            'descripcion' =>' Son profesiones afines a la ingeniería, aquellas que siendo del nivel profesional, su ejercicio se desarrolla en actividades relacionadas con la ingeniería en cualquiera de sus áreas, o cuyo campo ocupacional es conexo a la ingeniería, tales como: La Administración de Obras Civiles, la Construcción en Ingeniería y Arquitectura; la Administración de Sistemas de Información; la Administración Ambiental y de los Recursos Naturales, la Bioingeniería y la Administración en Informática, entre otras.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '24',
            'nombre' => 'ARTÍCULO 5o. AMPLIACIÓN DE LA CLASIFICACIÓN NACIONAL DE OCUPACIONES.',
            'descripcion' =>'En todo caso, el Consejo Profesional Nacional de Ingeniería, Copnia, podrá ampliar el alcance de las actividades a que se refiere la Clasificación Nacional de Ocupaciones en los Subgrupos 02 y 03 o norma que la sustituya o reforme, de acuerdo con las nuevas modalidades de los programas y títulos académicos en ingeniería y sus profesiones afines y auxiliares que se presenten en el país.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '25',
            'nombre' => 'ARTÍCULO 6o. REQUISITOS PARA EJERCER LA PROFESIÓN.',
            'descripcion' => 'Para poder ejercer legalmente la Ingeniería, sus profesiones afines o sus profesiones auxiliares en el territorio nacional, en las ramas o especialidades regidas por la presente ley, se requiere estar matriculado o inscrito en el Registro Profesional respectivo, que seguirá llevando el Copnia, lo cual se acreditará con la presentación de la tarjeta o documento adoptado por este para tal fin.' ,
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '26',
            'nombre' => 'ARTÍCULO 7o. REQUISITOS PARA OBTENER LA MATRÍCULA Y LA TARJETA DE MATRÍCULA PROFESIONAL.', 
            'descripcion'=> 'Sólo podrán ser matriculados en el Registro Profesional de Ingenieros y obtener tarjeta de matrícula profesional, para poder ejercer la profesión en el territorio nacional, quienes:',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '27',
            'nombre' => 'ARTÍCULO 8o. REQUISITOS PARA OBTENER EL CERTIFICADO DE INSCRIPCIÓN PROFESIONAL.', 
            'descripcion'=>'Sólo podrán ser matriculados en el Registro Profesional respectivo y obtener certificado de inscripción profesional y su respectiva tarjeta, para poder ejercer alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería en el territorio nacional, quienes:',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '28',
            'nombre' => 'ARTÍCULO 9o. PROCEDIMIENTO DE INSCRIPCIÓN Y MATRÍCULA.',
            'descripcion' => 'Para obtener la matrícula profesional o el certificado de que trata la presente ley, el interesado deberá presentar ante el Consejo Profesional Seccional o Regional de ingeniería del domicilio de la Universidad o Institución que otorgó el título, el original correspondiente con su respectiva acta de grado, fotocopia del documento de identidad y el recibo de consignación de los derechos que para el efecto fije el Copnia. Verificados los requisitos, el Seccional o Regional correspondiente, otorgará la matrícula o el certificado, según el caso, el cual deberá ser confirmado por el Consejo Nacional de Ingeniería en la sesión ordinaria siguiente a su recibo, ordenando la expedición del documento respectivo.',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '29',
            'nombre' => 'ARTÍCULO 10.', 
            'descripcion'=> 'Para efectos de la inscripción o matrícula, toda Universidad o Institución de Educación Superior que otorgue títulos correspondientes a las profesiones aquí reglamentadas, deberá remitir de oficio o por requerimiento del Copnia, el listado de graduandos cada vez que este evento ocurra, tanto al Consejo Seccional o Regional de su domicilio, como al Consejo Nacional de Ingeniería, respectivamente.',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '30',
            'nombre' => 'ARTÍCULO 11. POSESIÓN EN CARGOS, SUSCRIPCIÓN DE CONTRATOS O REALIZACIÓN DE DICTÁMENES TÉCNICOS QUE IMPLIQUEN EL EJERCICIO DE LA INGENIERÍA.', 
            'descripcion'=> ' Para poder tomar posesión de un cargo público o privado, en cuyo desempeño se requiera el conocimiento o el ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares; para participar en licitaciones públicas o privadas cuyo objeto implique el ejercicio de la ingeniería en cualquiera de sus ramas; para suscribir contratos de ingeniería y para emitir dictámenes sobre aspectos técnicos de la ingeniería o de algunas de sus profesiones auxiliares ante organismos estatales o personas de carácter privado, jurídicas o naturales; para presentarse o utilizar el título de Ingeniero para acceder a cargos o desempeños cuyo requisito sea poseer un título profesional, se debe exigir la presentación, en original, del documento que acredita la inscripción o el registro profesional de que trata la presente ley.',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '31',
            'nombre' => 'ARTÍCULO 12. EXPERIENCIA PROFESIONAL.', 
            'descripcion'=> 'Para los efectos del ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares, la experiencia profesional solo se computará a partir de la fecha de expedición de la matrícula profesional o del certificado de inscripción profesional, respectivamente. Todas las matrículas profesionales, certificados de inscripción profesional y certificados de matrícula otorgados con anterioridad a la vigencia de la presente ley conservan su validez y se presumen auténticas.',
            'idcapitulo' => '02'),
        array(
            'idarticulo' => '32',
            'nombre' => 'ARTÍCULO 13. EJERCICIO ILEGAL DE LA PROFESIÓN.', 
            'descripcion'=> 'Ejerce ilegalmente la profesión de la Ingeniera, de sus profesiones afines o de sus profesiones auxiliares y por lo tanto incurrirá en las sanciones que decrete la autoridad penal, administrativa o de policía correspondiente, la persona que sin cumplir los requisitos previstos en esta ley o en normas concordantes, practique cualquier acto comprendido en el ejercicio de estas profesiones. En igual infracción incurrirá la persona que, mediante avisos, propaganda, anuncios profesionales, instalación de oficinas, fijación de placas murales o en cualquier otra forma, actúe, se anuncie o se presente como Ingeniero o como Profesional Afín o como Profesional Auxiliar de la Ingeniería, sin el cumplimiento de los requisitos establecidos en la presente ley.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '33',
            'nombre' => 'ARTÍCULO 14. ENCUBRIMIENTO DEL EJERCICIO ILEGAL DE LA PROFESIÓN.', 
            'descripcion'=> 'El servidor público que en el ejercicio de su cargo, autorice, facilite, patrocine, encubra o permita el ejercicio ilegal de la ingeniería o de alguna de sus profesiones afines o auxiliares, incurrirá en falta disciplinaria, sancionable de acuerdo con las normas legales vigentes.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '34',
            'nombre' => 'ARTÍCULO 15. SANCIONES.', 
            'descripcion'=> ' El particular que viole las disposiciones de la presente ley incurrirá, sin perjuicio de las sanciones penales y de policía, en multa de dos (2) a cincuenta (50) salarios mínimos mensuales legales vigentes.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '35',
            'nombre' => 'ARTÍCULO 16. AVISO DEL EJERCICIO ILEGAL DE LA INGENIERÍA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, deberá dar aviso a todas las empresas relacionadas con la ingeniería o que utilicen los servicios de ingenieros, de la denuncia que se instaure contra cualquier persona por ejercer ilegalmente la ingeniería, utilizando todos los medios a su alcance para que se impida tal infracción, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '36',
            'nombre' => 'ARTÍCULO 17. RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS Y DE SUS REPRESENTANTES. ', 
            'descripcion'=> '',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '37',
            'nombre' => 'ARTÍCULO 18. DIRECCIÓN DE LABORES DE INGENIERÍA.', 
            'descripcion'=> 'Todo trabajo relacionado con el ejercicio de la Ingeniería, deberá ser dirigido por un ingeniero inscrito en el registro profesional de ingeniería y con tarjeta de matrícula profesional en la rama respectiva.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '38',
            'nombre' => 'ARTÍCULO 19. DICTÁMENES PERICIALES.', 
            'descripcion'=> 'El cargo o la función de perito, cuando el dictamen comprenda cuestiones técnicas de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, se encomendará al profesional cuya especialidad corresponda a la materia objeto del dictamen.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '39',
            'nombre' => 'ARTÍCULO 20. PROPUESTAS Y CONTRATOS.', 
            'descripcion'=> 'Las propuestas que se formulen en las licitaciones y concursos abiertos por entidades públicas del orden nacional, seccional o local, para la adjudicación de contratos cuyo objeto implique el desarrollo de las actividades catalogadas como ejercicio de la ingeniería, deberán estar avalados, en todo caso, cuando menos, por un ingeniero inscrito y con tarjeta de matrícula profesional en la respectiva rama de la ingeniería. En los contratos que se celebren como resultado de la licitación o del concurso, los contratistas tendrán la obligación de encomendar los estudios, la dirección técnica, la ejecución de los trabajos o la interventoría, a profesionales inscritos en el registro profesional de ingeniería, acreditados con la tarjeta de matrícula profesional o, excepcionalmente, con la constancia o certificado de su vigencia.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '40',
            'nombre' => 'ARTÍCULO 21. DENUNCIA DEL EJERCICIO ILEGAL DE LA INGENIERÍA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, denunciará y publicará por los medios a su alcance el ejercicio ilegal de la profesión de que tenga conocimiento, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.',
            'idcapitulo' => '03'),
        array(
            'idarticulo' => '41',
            'nombre' => 'ARTÍCULO 22.', 
            'descripcion'=> 'En las construcciones, consultorías, estudios, proyectos, cálculos, diseños, instalaciones, montajes, interventorías, asesorías y demás trabajos relacionados con el ejercicio de las profesiones a las que se refiere la presente ley, la participación de los profesionales extranjeros no podrá ser superior a un veinte por ciento (20%) de su personal de ingenieros o profesionales auxiliares o afines colombianos, sin perjuicio de la aplicación de las normas laborales vigentes.',
            'idcapitulo' => '04'),
        array(
            'idarticulo' => '42',
            'nombre' => 'ARTÍCULO 23. PERMISO TEMPORAL PARA EJERCER SIN MATRÍCULA A PERSONAS TITULADAS Y DOMICILIADAS EN EL EXTERIOR.', 
            'descripcion'=> 'Quien ostente el título académico de ingeniero o de profesión auxiliar o afín de las profesiones aquí reglamentadas, esté domiciliado en el exterior y pretenda vincularse bajo cualquier modalidad contractual para ejercer temporalmente la profesión en el territorio nacional, deberá obtener del Consejo Profesional Nacional de Ingeniería, Copnia, un permiso temporal para ejercer sin matrícula profesional, certificado de inscripción profesional o certificado de matrícula, según el caso; el cual tendrá validez por un (1) año y podrá ser renovado discrecionalmente por el Consejo Profesional Nacional de Ingeniería, Copnia, siempre, hasta por el plazo máximo del contrato o de la labor contratada, previa presentación de solicitud suficientemente motivada, por parte de la empresa contratante o por el profesional interesado o su representante; título o diploma debidamente consularizado o apostillado, según el caso; fotocopia del contrato que motiva su actividad en el país y el recibo de consignación de los derechos respectivos.',
            'idcapitulo' => '04'),
        array(
            'idarticulo' => '43',
            'nombre' => 'ARTÍCULO 24. CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA', 
            'descripcion'=> 'En adelante el Consejo Profesional Nacional de Ingeniería y sus Profesiones Auxiliares, se denominará Consejo Profesional Nacional de Ingeniería y su sigla será "Copnia" y tendrá su sede principal en Bogotá, D.C.',
            'idcapitulo' => '05'),
        array(
            'idarticulo' => '44',
            'nombre' => 'ARTÍCULO 25. RENTAS Y PATRIMONIO.', 
            'descripcion'=> 'Las rentas y el patrimonio del Copnia, estarán conformados por los recursos públicos que en actualidad posea, o que haya adquirido la Nación para su funcionamiento; por los recursos provenientes del cobro de certificados y constancias en ejercicio de sus funciones, cuyo valor será fijado de manera razonable de acuerdo con su determinación; por los recursos provenientes de los servicios a derechos de matrícula, tarjetas y permisos temporales. La t asa se distribuirá en forma equitativa entre los usuarios a partir de criterios relevantes que reconozcan los costos económicos requeridos, en las condiciones que fije el reglamento que adopte el Gobierno Nacional, derechos que no podrán exceder de la suma equivalente a un (1) salario mínimo mensual vigente.',
            'idcapitulo' => '05'),
        array(
            'idarticulo' => '45',
            'nombre' => 'ARTÍCULO 26. FUNCIONES ESPECÍFICAS DEL CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA, COPNIA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, tendrá como funciones específicas las siguientes:',
            'idcapitulo' => '05'),
        array(
            'idarticulo' => '46',
            'nombre' => 'ARTÍCULO 27. CREACIÓN DE LOS CONSEJOS SECCIONALES Y REGIONALES.(INEXEQUIBLE)', 
            'descripcion'=> 'Facúltase al Consejo Profesional Nacional de Ingeniería, Copnia, para que con el voto de la mayoría de los miembros de su Junta de Consejeros y mediante resolución motivada, suprima, fusione o cree sus respectivos Consejos Seccionales o regionales cuando lo estime conveniente, los cuales podrán no coincidir con la organización territorial de la República.',
            'idcapitulo' => '06'),  
        array(
            'idarticulo' => '47',
            'nombre' => 'ARTÍCULO 28. INTEGRACIÓN DE LA JUNTA DE CONSEJEROS REGIONAL O SECCIONAL.', 
            'descripcion'=> 'El Gobernador del departamento en el cual funcione el Consejo Regional o Seccional, quien lo presidirá; pudiendo delegar, exclusivamente, en el Secretario de Obras Públicas del departamento o quien haga sus veces.
            .El Secretario de Educación del departamento sede o su delegado.
            El Secretario de Planeación del departamento sede o quien haga sus veces, o su delegado.
            El Rector o el Decano de ingeniería de una de las universidades o instituciones de Educación Superior del departamento sede, que otorguen título de ingeniero, o de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una.
            El Presidente de una de las agremiaciones regionales de ingeniería, de sus profesiones afines o de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una en el departamento sede.',
            'idcapitulo' => '06'),
        array(
            'idarticulo' => '48',
            'nombre' => 'ARTÍCULO 29. POSTULADOS ÉTICOS DEL EJERCICIO PROFESIONAL.', 
            'descripcion'=> ' El ejercicio profesional de la Ingeniería en todas sus ramas, de sus profesiones afines y sus respectivas profesiones auxiliares, debe ser guiado por criterios, conceptos y elevados fines, que propendan a enaltecerlo; por lo tanto deberá estar ajustado a las disposiciones de las siguientes normas que constituyen su Código de Ética Profesional.',
            'idcapitulo' => '07'),
        array(
            'idarticulo' => '49',
            'nombre' => 'ARTÍCULO 30.', 
            'descripcion'=> 'Los ingenieros, sus profesionales afines y sus profesionales auxiliares, para todos los efectos del Código de Ética Profesional y su Régimen Disciplinario contemplados en esta ley, se denominarán "Los profesionales".',
            'idcapitulo' => '07'),
        array(
            'idarticulo' => '50',
            'nombre' => 'ARTÍCULO 31. DEBERES GENERALES DE LOS PROFESIONALES.', 
            'descripcion'=> 'Son deberes generales de los profesionales los siguientes:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '51',
            'nombre' => 'ARTÍCULO 32. PROHIBICIONES GENERALES A LOS PROFESIONALES.', 
            'descripcion'=> 'Son prohibiciones generales a los profesionales:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '52',
            'nombre' => 'ARTÍCULO 33. DEBERES ESPECIALES DE LOS PROFESIONALES PARA CON LA SOCIEDAD. ', 
            'descripcion'=> 'Son deberes especiales de los profesionales para con la sociedad:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '53',
            'nombre' => 'ARTÍCULO 34. PROHIBICIONES ESPECIALES A LOS PROFESIONALES RESPECTO DE LA SOCIEDAD. ', 
            'descripcion'=> 'Son prohibiciones especiales a los profesionales respecto de la sociedad:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '54',
            'nombre' => 'ARTÍCULO 35. DEBERES DE LOS PROFESIONALES PARA CON LA DIGNIDAD DE SUS PROFESIONES.', 
            'descripcion'=> 'Son deberes de los profesionales de quienes trata este Código para con la dignidad de sus profesiones:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '55',
            'nombre' => 'ARTÍCULO 36. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE LA DIGNIDAD DE SUS PROFESIONES. ', 
            'descripcion'=> 'Son prohibiciones a los profesionales respecto de la dignidad de sus profesiones:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '56',
            'nombre' => 'ARTÍCULO 37. DEBERES DE LOS PROFESIONALES PARA CON SUS COLEGAS Y DEMÁS PROFESIONALES.', 
            'descripcion'=> 'Son deberes de los profesionales para con sus colegas y demás profesionales de la ingeniería:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '57',
            'nombre' => 'ARTÍCULO 38. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS COLEGAS Y DEMÁS PROFESIONALES.', 
            'descripcion'=> ' Son prohibiciones a los profesionales, respecto de sus colegas y demás profesionales de la ingeniería:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '58',
            'nombre' => 'ARTÍCULO 39. DEBERES DE LOS PROFESIONALES PARA CON SUS CLIENTES Y EL PÚBLICO EN GENERAL.', 
            'descripcion'=> 'Son deberes de los profesionales para con sus clientes y el público en general:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '59',
            'nombre' => 'ARTÍCULO 40. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS CLIENTES Y EL PÚBLICO EN GENERAL.', 
            'descripcion'=> 'Son prohibiciones a los profesionales respecto de sus clientes y el público en general:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '60',
            'nombre' => 'ARTÍCULO 41. DEBERES DE LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS.', 
            'descripcion'=> 'Son deberes de los profesionales que se desempeñen en funciones públicas o privadas, los siguientes:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '61',
            'nombre' => 'ARTÍCULO 42. PROHIBICIONES A LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS.', 
            'descripcion'=> 'Son prohibiciones a los profesionales que se desempeñen en funciones públicas o privadas, las siguientes:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '62',
            'nombre' => 'ARTÍCULO 43. DEBERES DE LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES.', 
            'descripcion'=> 'Son deberes de los profesionales en los concursos o licitaciones:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '63',
            'nombre' => 'ARTÍCULO 44. DE LAS PROHIBICIONES A LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES.', 
            'descripcion'=> 'Son prohibiciones de los profesionales en los concursos o licitaciones:',
            'idcapitulo' => '08'),
        array(
            'idarticulo' => '64',
            'nombre' => 'ARTÍCULO 45. RÉGIMEN DE INHABILIDADES E INCOMPATIBILIDADES QUE AFECTAN EL EJERCICIO.', 
            'descripcion'=> 'Incurrirán en faltas al régimen de inhabilidades e incompatibilidades y por lo tanto se les podrán imponer las sanciones a que se refiere la presente ley:',
            'idcapitulo' => '09'),
        array(
            'idarticulo' => '65',
            'nombre' => 'ARTÍCULO 46. DEFINICIÓN DE FALTA DISCIPLINARIA.', 
            'descripcion'=> 'Se entiende como falta que promueva la acción disciplinaria y en consecuencia, la aplicación del procedimiento aquí establecido, toda violación a las prohibiciones y al régimen de inhabilidades e incompatibilidades, al correcto ejercicio de la profesión o al cumplimiento de las obligaciones impuestas por el Código de Ética Profesional adoptado en virtud de la presente ley.',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '66',
            'nombre' => 'ARTÍCULO 47. SANCIONES APLICABLES.', 
            'descripcion'=> 'Los Consejos Seccionales o Regionales de Ingeniería podrán sancionar a los profesionales responsables de la comisión de faltas disciplinarias, con:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '67',
            'nombre' => 'ARTÍCULO 48. ESCALA DE SANCIONES.', 
            'descripcion'=> 'Los profesionales de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, a quienes se les compruebe la violación de normas del Código de Ética Profesional adoptado en la presente ley, estarán sometidos a las siguientes sanciones por parte del Consejo Profesional de Ingeniería respectivo:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '68',
            'nombre' => 'ARTÍCULO 49. FALTAS SUSCEPTIBLES DE SANCIÓN DISCIPLINARIA.', 
            'descripcion'=> 'Será susceptible de sanción disciplinaria todo acto u omisión del profesional, intencional o culposo, que implique violación de las prohibiciones; incumplimiento de las obligaciones; ejecución de actividades incompatibles con el decoro que exige el ejercicio de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares; el ejercicio de actividades delictuosas relacionadas con el ejercicio de la profesión o el incumplimiento de alguno de los deberes que la profesión o las normas que la rigen le imponen.',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '69',
            'nombre' => 'ARTÍCULO 50. ELEMENTOS DE LA FALTA DISCIPLINARIA.', 
            'descripcion'=> 'La configuración de la falta disciplinaria deberá estar enmarcada dentro de los siguientes elementos o condiciones:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '70',
            'nombre' => 'ARTÍCULO 51. PREVALENCIA DE LOS PRINCIPIOS RECTORES.', 
            'descripcion'=> 'En la interpretación y aplicación del régimen disciplinario establecido prevalecerán, en su orden, los principios rectores que determina la Constitución Política, este código y el Código Contencioso Administrativo.',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '71',
            'nombre' => 'ARTÍCULO 52. CRITERIOS PARA DETERMINAR LA GRAVEDAD O LEVEDAD DE LA FALTA DISCIPLINARIA.', 
            'descripcion'=> 'El Consejo Profesional Seccional o Regional correspondiente de Ingeniería determinará si la falta es leve, grave o gravísima, de conformidad con los siguientes criterios:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '72',
            'nombre' => 'ARTÍCULO 53. FALTAS CALIFICADAS COMO GRAVÍSIMAS', 
            'descripcion'=> ' Se consideran gravísimas y se constituyen en causal de cancelación de la matrícula profesional, sin requerir la calificación que de ellas haga el Consejo respectivo, las siguientes faltas:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '73',
            'nombre' => 'ARTÍCULO 54. CONCURSO DE FALTAS DISCIPLINARIAS.', 
            'descripcion'=> 'El profesional que con una o varias acciones u omisiones infrinja varias disposiciones del Código de Ética Profesional o varias veces la misma disposición, quedará sometido a la que establezca la sanción más grave o, en su defecto, a una de mayor entidad.',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '74',
            'nombre' => 'ARTÍCULO 55. CIRCUNSTANCIAS QUE JUSTIFICAN LA FALTA DISCIPLINARIA. ', 
            'descripcion'=> 'La conducta se justifica cuando se comete:',
            'idcapitulo' => '10'),
        array(
            'idarticulo' => '75',
            'nombre' => 'ARTÍCULO 56. ACCESO AL EXPEDIENTE.', 
            'descripcion'=> ' El investigado tendrá acceso a la queja y demás partes del expediente disciplinario, solo a partir del momento en que sea escuchado en versión libre y espontánea o desde la notificación de cargos, según el caso.',
            'idcapitulo' => '10',
            ),
        array(
            'idarticulo' => '76',
            'nombre' => 'ARTÍCULO 57. PRINCIPIO DE IMPARCIALIDAD.', 
            'descripcion'=> 'El Consejo Profesional de Ingeniería respectivo, directamente o a través de sus Consejos Seccionales o Regionales, deberá investigar y evaluar, tanto los hechos y circunstancias desfavorables, como los favorables a los intereses del disciplinado.',
            'idcapitulo' => '10',
            ),
        array(
            'idarticulo' => '77',
            'nombre' => 'ARTÍCULO 58. DIRECCIÓN DE LA FUNCIÓN DISCIPLINARIA.', 
            'descripcion'=> 'Corresponde al Presidente del Consejo Profesional de Ingeniería respectivo, la dirección de la función disciplinaria, sin perjuicio del impedimento de intervenir o tener injerencia en la investigación, en razón de tener que conocer en segunda instancia por vía de apelación o de consulta.',
            'idcapitulo' => '10',
            ),
        array(
            'idarticulo' => '78',
            'nombre' => 'ARTÍCULO 59. PRINCIPIO DE PUBLICIDAD.', 
            'descripcion'=> ' El Consejo Profesional de Ingeniería respectivo respetará y aplicará el principio de publicidad dentro de las investigaciones disciplinarias; no obstante, ni el quejoso, ni terceros interesados se constituirán en partes dentro de estas.',
            'idcapitulo' => '10',
            ),
        array(
            'idarticulo' => '79',
            'nombre' => 'ARTÍCULO 60. INICIACIÓN DEL PROCESO DISCIPLINARIO.', 
            'descripcion'=> 'El proceso disciplinario de que trata el presente título se iniciará por queja interpuesta por cualquier persona natural o jurídica, la cual deberá formularse por escrito ante el Consejo Seccional o Regional del Consejo Profesional de Ingeniería respectivo, correspondiente a la jurisdicción territorial del lugar en que se haya cometido el último acto constitutivo de la falta o en defecto de este, ante el Consejo Seccional o Regional geográficamente más cercano.',
            'idcapitulo' => '11'),
        array(
            'idarticulo' => '80',
            'nombre' => 'ARTÍCULO 61. RATIFICACIÓN DE LA QUEJA.', 
            'descripcion'=> ' Recibida la queja por el Consejo Seccional o Regional, a través de la Secretaría procederá a ordenarse la ratificación bajo juramento de la queja y mediante auto, ordenará la investigación preliminar, con el fin de establecer si hay o no mérito para abrir investigación formal disciplinaria contra el presunto o presuntos infractores. Del auto a que se refiere el presente artículo se dará aviso escrito al Consejo Profesional Nacional correspondiente.',
            'idcapitulo' => '11'),
        array(
            'idarticulo' => '81',
            'nombre' => 'ARTÍCULO 62. TRASLADO DE COMPETENCIA', 
            'descripcion'=> ' Cuando existan razones para que se considere que se pueda entorpecer un proceso en determinado Consejo Seccional, el Consejo Nacional, podrá comisionar a otro Consejo Seccional, diferente del competente por jurisdicción territorial, el desarrollo del proceso disciplinario, para garantizar el cumplimento de todos los principios que lo rigen.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '82',
            'nombre' => 'ARTÍCULO 63. INVESTIGACIÓN PRELIMINAR.', 
            'descripcion'=> 'La investigación preliminar será adelantada por la respectiva Secretaría Seccional y no podrá excederse de sesenta (60) días, contados a partir de la fecha del auto que ordena la apertura de la investigación preliminar, durante los cuales se decretarán y practicarán las pruebas que el investigador considere pertinentes y que conduzcan a la comprobación de los hechos; las cuales podrán ser, entre otras, testimoniales, documentales, periciales, etc.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '83',
            'nombre' => 'ARTÍCULO 64. FINES DE LA INDAGACIÓN PRELIMINAR.', 
            'descripcion'=> 'La indagación preliminar tendrá como fines verificar la ocurrencia de la conducta, determinar si es constitutiva de falta disciplinaria e identificar o individualizar al profesional que presuntamente intervino en ella.',
            'idcapitulo' => '11'),
        array(
            'idarticulo' => '84',
            'nombre' => 'ARTÍCULO 65. INFORME Y CALIFICACIÓN DEL MÉRITO DE LA INVESTIGACIÓN PRELIMINAR.', 
            'descripcion'=> 'Terminada la etapa de investigación preliminar, la Secretaría Seccional o Regional procederá dentro de los diez (10) días hábiles siguientes, a rendir un informe al Presidente Seccional, para que este, dentro de los quince (15) días hábiles siguientes a su recibo, califique lo actuado mediante auto motivado, en el que se determinará si hay o no mérito para adelantar investigación formal disciplinaria contra el profesional disciplinado y en caso afirmativo, se le formulará con el mismo auto, el correspondiente pliego de cargos. Si no se encontrare mérito para seguir la actuación, el Presidente Seccional ordenará en la misma providencia el archivo del expediente, informando sucintamente la determinación a la Junta de Consejeros Seccional o Regional en la siguiente sesión ordinaria, para que quede consignado en el acta respectiva, comunicando la decisión adoptada al quejoso, a los profesionales involucrados y al Consejo Profesional Nacional respectivo.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '85',
            'nombre' => 'ARTÍCULO 66. NOTIFICACIÓN PLIEGO DE CARGOS.', 
            'descripcion'=> ' La Secretaría Regional o Seccional, notificará personalmente el pliego de cargos al profesional inculpado. No obstante, de no poder efectuarse la notificación personal, se hará por edicto en los términos establecidos en el Código Contencioso Administrativo. Si transcurrido el término de la notificación por edicto, el inculpado no compareciere, se proveerá el nombramiento de un apoderado de oficio, de la lista de abogados inscritos ante el Consejo Seccional de la Judicatura correspondiente, con quien se continuará la actuación; designación que conllevará al abogado, las implicaciones y responsabilidades que la ley determina.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '86',
            'nombre' => 'ARTÍCULO 67. TRASLADO DEL PLIEGO DE CARGOS.', 
            'descripcion'=> ' Surtida la notificación, se dará traslado al profesional inculpado por el término improrrogable de diez (10) días hábiles, para presentar descargos, solicitar y aportar pruebas. Para tal efecto, el expediente permanecerá a su disposición en la Secretaría de la Seccional o Regional respectiva.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '87',
            'nombre' => 'ARTÍCULO 68. ETAPA PROBATORIA.', 
            'descripcion'=> ' Vencido el término de traslado, la Secretaría Seccional, decretará las pruebas solicitadas por el investigado y las demás que de oficio considere conducentes y pertinentes, mediante auto contra el cual no procede recurso alguno y el cual deberá ser comunicado al profesional disciplinado. El término probatorio será de sesenta (60) días.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '88',
            'nombre' => 'ARTÍCULO 69. FALLO DE PRIMERA INSTANCIA.', 
            'descripcion'=> 'Vencido el término probatorio previsto, el Presidente Regional o Seccional, elaborará un proyecto de decisión, que se someterá a la consideración de la Junta de Consejeros Regionales o Seccionales, la cual podrá aceptarlo, aclararlo, modificarlo o revocarlo. Si la mayoría de los miembros asistentes a la sesión aprueban el proyecto de decisión, se adoptará la decisión propuesta mediante resolución motivada.',
            'idcapitulo' => '11'),
        array(
            'idarticulo' => '89',
            'nombre' => 'ARTÍCULO 70. NOTIFICACIÓN DEL FALLO', 
            'descripcion'=> ' La decisión adoptada por el Consejo Profesional Seccional, se notificará personalmente al interesado, por intermedio de la Secretaría Seccional, dentro de los diez (10) días siguientes a la fecha de la sesión en que se adoptó y si no fuere posible, se realizará por edicto, en los términos del artículo 45 del Código Contencioso Administrativo.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '90',
            'nombre' => 'ARTÍCULO 71. RECURSO DE APELACIÓN.', 
            'descripcion'=> ' Contra dicha providencia solo procede el recurso de apelación ante el Consejo Profesional Nacional de Ingeniería respectivo, dentro de los cinco (5) días siguientes a la fecha de la notificación personal o de la desfijación del edicto recurso que deberá presentarse ante el Consejo Regional o Seccional por escrito y con el lleno de los requisitos que exige el Código Contencioso Administrativo.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '91',
            'nombre' => 'ARTÍCULO 72. AGOTAMIENTO DE LA VÍA GUBERNATIVA.', 
            'descripcion'=> ' El Consejo Profesional Nacional resolverá el recurso interpuesto, mediante resolución motivada; determinación que será definitiva y contra la cual no procederá recurso alguno por vía gubernativa.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '92',
            'nombre' => 'ARTÍCULO 73. CONFIRMACIÓN.', 
            'descripcion'=> 'En todo caso, el acto administrativo mediante el cual se dé por terminada la actuación de un Consejo Seccional dentro de un proceso disciplinario, deberá ser confirmado, modificado o revocado, según el caso, por el Consejo Profesional Nacional de Ingeniería correspondiente, por vía de apelación o de consulta.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '93',
            'nombre' => 'ARTÍCULO 74. CÓMPUTO DE LA SANCIÓN.', 
            'descripcion'=> ' Las sanciones impuestas por violaciones al presente régimen disciplinario, empezarán a computarse a partir de la fecha de la comunicación personal o de la entrega por correo certificado, que se haga al profesional sancionado de la decisión del Consejo Profesional Nacional correspondiente, sobre la apelación o la consulta.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '94',
            'nombre' => 'ARTÍCULO 75. AVISO DE LA SANCIÓN.', 
            'descripcion'=> ' De toda sanción disciplinaria impuesta a un profesional, a través de la Secretaría del Consejo Seccional respectivo, se dará aviso a la Procuraduría General de la Nación, a todas las entidades que tengan que ver con el ejercicio profesional correspondiente, con el registro de proponentes y contratistas y a las agremiaciones de profesionales, con el fin de que se impida el ejercicio de la profesión por parte del sancionado, debiendo estas, ordenar las anotaciones en sus registros y tomar las medidas pertinentes, con el fin de hacer efectiva la sanción. La anotación tendrá vigencia y solo surtirá efectos por el término de la misma.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '95',
            'nombre' => 'ARTÍCULO 76. CADUCIDAD DE LA ACCIÓN.', 
            'descripcion'=> 'La acción disciplinaria a que se refiere el presente título caduca en cinco (5) años contados a partir de la fecha en que se cometió el último acto constitutivo de la falta. El auto que ordena la apertura de la investigación preliminar, interrumpe el término de caducidad. El proceso prescribirá tres años después de la fecha de expedición de dicho auto.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '96',
            'nombre' => 'ARTÍCULO 77. RÉGIMEN TRANSITORIO.', 
            'descripcion'=> ' Todas las actuaciones que se adelanten por parte de los Consejos Profesionales de Ingeniería y sus respectivos Consejos Seccionales o Regionales, de acuerdo con los procedimientos vigentes en el momento en que comience a regir la presente ley, seguirán rigiéndose por estos hasta su culminación.',
            'idcapitulo' => '11',
            ),
        array(
            'idarticulo' => '97',
            'nombre' => 'ARTÍCULO 78. VIGENCIA.', 
            'descripcion'=> 'La presente ley rige a partir de la fecha de su publicación en el Diario Oficial y deroga todas las disposiciones que le sean contrarias, en especial la Ley 20 de 1971, la Ley 14 de 1975, la Ley 64 de 1978, la Ley 28 de 1989, la Ley 33 de 1989, Ley 392 de 1997 y sus normas reglamentarias.',
            'idcapitulo' => '11')          
    );

    private $itemArticulo = array(
		array(
			'iditem' => '200',
			'descripcion' => 'a) Los estudios, la planeación, el diseño, el cálculo, la programación, la asesoría, la consultoría, la interventoría, la construcción, el mantenimiento y la administración de construcciones de edificios y viviendas de toda índole, de puentes, presas, muelles, canales, puertos, carreteras, vías urbanas y rurales, aeropuertos, ferrocarriles, teleféricos, acueductos, alcantarillados, riesgos (sic), drenajes y pavimentos; oleoductos, gasoductos, poliductos y en general líneas de conducción y transporte de hidrocarburos; líneas de transmisión eléctrica y en general todas aquellas obras de infraestructura para el servicio de la comunidad;', 
            'idarticulo' => '21'),
        array(
            'iditem' => '201',
            'descripcion' => 'b) Los estudios, proyectos, diseños y procesos industriales, textiles, electromecánicos, termoeléctricos, energéticos, mecánicos, eléctricos, electrónicos, de computación, de sistemas, teleinformáticos, agroindustriales, agronómicos, agrícolas, agrológicos, de alimentos, agrometeorológicos, ambientales, geofísicos, forestales, químicos, metalúrgicos, mineros, de petróleos, geológicos, geodésicos, geográficos, topográficos e hidrológicos;', 
            'idarticulo' => '21'),
        array(
            'iditem' => '202',
            'descripcion' => 'c) La planeación del transporte aéreo, terrestre y náutico y en general, todo asunto relacionado con la ejecución o desarrollo de las tareas o actividades de las profesiones especificadas en los subgrupos 02 y 03 de la Clasificación Nacional de Ocupaciones o normas que la sustituyan o complementen, en cuanto a la ingeniería, sus profesiones afines y auxiliares se refiere. También se entiende por ejercicio de la profesión para los efectos de esta ley, el presentarse o anunciarse como ingeniero o acceder a un cargo de nivel profesional utilizando dicho título.', 
            'idarticulo' => '21'),
        array(
            'iditem' => '203',
            'descripcion' => 'a) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior oficialmente reconocidas, de acuerdo con las normas legales vigentes;', 
            'idarticulo' => '26'),
        array(
            'iditem' => '204',
            'descripcion' => 'b) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior que funcionen en países con los cuales Colombia haya celebrado tratados o convenios sobre reciprocidad de títulos, situación que debe ser avalada por el ICFES o por el organismo que se determine para tal efecto;', 
            'idarticulo' => '26'),
        array(
            'iditem' => '205',
            'descripcion' => 'c) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior que funcionen en países con los cuales Colombia no haya celebrado tratados o convenios sobre reciprocidad de títulos; siempre y cuando hayan obtenido la homologación o convalidación del título académico ante las autoridades competentes, conforme con las normas vigentes sobre la materia.', 
            'idarticulo' => '26'),
        array(
            'iditem' => '206',
            'descripcion' => 'a) Hayan adquirido el título académico en alguna de sus profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior oficialmente reconocidas, de acuerdo con las normas legales vigentes;', 
            'idarticulo' => '27'),
        array(
            'iditem' => '207',
            'descripcion' => 'b) Hayan adquirido el título académico en alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior que funcionen en países con los cuales Colombia haya celebrado tratados o convenios sobre reciprocidad de títulos;', 
            'idarticulo' => '27'),
        array(
            'iditem' => '208',
            'descripcion' => 'c) Hayan adquirido el título académico en alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior que funcionen en países con los cuales Colombia no haya celebrado tratados o convenios sobre reciprocidad de títulos; siempre y cuando hayan obtenido la homologación o convalidación del título académico ante las autoridades competentes, de acuerdo con las normas vigentes.', 
            'idarticulo' => '27'),
        array(
            'iditem' => '209',
            'descripcion' => 'a) Dictar su propio reglamento interno y el de los Consejos Seccionales o Regionales;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '210',
            'descripcion' => 'b) (sic) Confirmar, aclarar, derogar o revocar las resoluciones de aprobación o denegación de expedición de matrículas profesionales, de certificados de inscripción profesional y de certificados de matrícula profesional, a profesionales de la ingeniería, de sus profesiones afines y de sus profesionales auxiliares, respectivamente, expedidas por los Consejos Seccionales o Regionales;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '211',
            'descripcion' => 'c) Expedir las tarjetas de matrícula, de certificados de inscripción profesional y de certificado de matrícula a los ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, respectivamente;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '212',
            'descripcion' => 'd) Resolver en única instancia sobre la expedición o cancelación de los permisos temporales;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '213',
            'descripcion' => 'e) Denunciar ante las autoridades competentes las violaciones al ejercicio legal de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '214',
            'descripcion' => 'f) Denunciar ante las autoridades competentes los delitos y contravenciones de que tenga conocimiento con ocasión de sus funciones;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '215',
            'descripcion' => 'g) Resolver en segunda instancia, los recursos que se interpongan contra las determinaciones que pongan fin a las actuaciones de primera instancia de los Consejos Seccionales o Regionales;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '216',
            'descripcion' => 'h) Implementar y mantener, dentro de las técnicas de la informática y la tecnología moderna, el registro profesional de ingeniería correspondiente a los profesionales de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '217',
            'descripcion' => 'i) Emitir conceptos y responder consultas sobre aspectos relacionados con el ejercicio de la ingeniería, sus profesiones afines y sus profesiones auxiliares, cuando así se le solicite para cualquier efecto legal o profesional;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '218',
            'descripcion' => 'j) Servir de cuerpo consultivo oficial del Gobierno, en todos los asuntos inherentes a la reglamentación de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '219',
            'descripcion' => 'k) Establecer el valor de los derechos provenientes del cobro de certificados y constancias, el cual será fijado de manera razonable de acuerdo con su determinación; y de los recursos provenientes por los servicios de derecho de matrícula, tarjetas y permisos temporales. La tasa se distribuirá en forma equitativa entre los usuarios a partir de criterios relevantes que recuperan los costos del servicio; en las condiciones que fije el reglamento que adopte el Gobierno Nacional, señalando el sistema y el método, para definir la recuperación de los costos de los servicios que se prestan a los usuarios o la participación de los servicios que se les proporcionan y la forma de hacer su reparto según el artículo 338 de la Constitución Política, derechos que no podrán exceder de la suma equivalente a un (1) salario mínimo legal mensual vigente;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '220',
            'descripcion' => 'l) Aprobar y ejecutar, en forma autónoma, el presupuesto del Consejo Profesional Nacional de Ingeniería, Copnia, y el de los Consejos Regionales o Seccionales;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '221',
            'descripcion' => 'm) Con el apoyo de las demás autoridades administrativas y de policía, inspeccionar, vigilar y controlar el ejercicio profesional de las personas naturales o jurídicas que ejerzan la ingeniería o alguna de sus profesiones auxiliares;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '222',
            'descripcion' => 'n) Crear, reestructurar o suprimir sus Consejos Regionales o Seccionales, de acuerdo con las necesidades propias de la función de inspección, control y vigilancia del ejercicio profesional y las disponibilidades presupuestales respectivas;(INEXEQUIBLE)', 
            'idarticulo' => '45'),
        array(
            'iditem' => '223',
            'descripcion' => 'o) Adoptar su propia planta de personal de acuerdo con sus necesidades y determinación;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '224',
            'descripcion' => 'p) Velar por el cumplimiento de la presente ley y de las demás normas que la reglamenten y complementen;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '226',
            'descripcion' => 'q) Presentar al Ministerio de Relaciones Exteriores, observaciones sobre la expedición de visas a ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, solicitadas con el fin de ejercer su profesión en el territorio nacional;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '227',
            'descripcion' => 'r) Presentar al Ministerio de Educación Nacional, observaciones sobre la aprobación de los programas de estudios y establecimientos educativos relacionados con la ingeniería, las profesiones afines y las profesiones auxiliares de esta;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '228',
            'descripcion' => 's) Denunciar ante las autoridades competentes las violaciones de las disposiciones que reglamentan el ejercicio de la ingeniería, sus profesiones afines y sus profesiones auxiliares y solicitar de aquellas la imposición de las sanciones correspondientes;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '229',
            'descripcion' => 't) Atender las quejas o denuncias hechas sobre la conducta de los ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, que violen los mandatos de la presente ley, del correcto ejercicio y del Código de Ética Profesional absolviendo o sancionando, oportunamente, a los profesionales investigados;', 
            'idarticulo' => '45'),
        array(
            'iditem' => '230',
            'descripcion' => 'u) Las demás que le señalen la ley y demás normas reglamentarias y complementarias.', 
            'idarticulo' => '45'),
        array(
        'iditem' => '231',
        'descripcion' => 'a) Cumplir con los requerimientos, citaciones y demás diligencias que formule u ordene el Consejo Profesional Nacional de Ingeniería respectivo o cualquiera de sus Consejos Seccionales o Regionales;', 
        'idarticulo' => '50'),
        array(
            'iditem' => '232',
            'descripcion' => 'b) Custodiar y cuidar los bienes, valores, documentación e información que por razón del ejercicio de su profesión, se le hayan encomendado o a los cuales tenga acceso; impidiendo o evitando su sustracción, destrucción, ocultamiento o utilización indebidos, de conformidad con los fines a que hayan sido destinados;', 
            'idarticulo' => '50'),
        array(
            'iditem' => '233',
            'descripcion' => 'c) Tratar con respeto, imparcialidad y rectitud a todas las personas con quienes tenga relación con motivo del ejercicio de la profesión;(INEXEQUIBLE)', 
            'idarticulo' => '50'),
        array(
            'iditem' => '234',
            'descripcion' => 'd) Registrar en el Consejo Profesional Nacional de Ingeniería respectivo o en alguno de sus Consejos Seccionales o Regionales, su domicilio o dirección de la residencia y teléfono, dando aviso oportuno de cualquier cambio;(NEXEQUIBLE)', 
            'idarticulo' => '50'),
        array(
            'iditem' => '235',
            'descripcion' => 'e) Permitir el acceso inmediato a los representantes del Consejo Profesional Nacional de Ingeniería respectivo y autoridades de policía, a los lugares donde deban adelantar sus investigaciones y el examen de los libros, documentos y diligencias correspondientes, así como prestarles la necesaria colaboración para el cumplido desempeño de sus funciones;', 
            'idarticulo' => '50'),
        array(
            'iditem' => '236',
            'descripcion' => 'f) Denunciar los delitos, contravenciones y faltas contra este Código de Ética, de que tuviere conocimiento con ocasión del ejercicio de su profesión, aportando toda la información y pruebas que tuviere en su poder;', 
            'idarticulo' => '50'),
        array(
                'iditem' => '237',
                'descripcion' => 'g) Los demás deberes incluidos en la presente ley y los indicados en todas las normas legales y técnicas relacionados con el ejercicio de su profesión.', 
                'idarticulo' => '50'),
        array(
            'iditem' => '238',
            'descripcion' => 'a) Nombrar, elegir, dar posesión o tener a su servicio, para el desempeño de un cargo privado o público que requiera ser desempeñado por profesionales de la ingeniería o alguna de sus profesiones afines o auxiliares, en forma permanente o transitoria, a personas que ejerzan ilegalmente la profesión;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '239',
            'descripcion' => 'b) Permitir, tolerar o facilitar el ejercicio ilegal de las profesiones reguladas por esta ley;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '240',
            'descripcion' => 'c) Solicitar o aceptar comisiones en dinero o en especie por concepto de adquisición de bienes y servicios para su cliente, sociedad, institución, etc., para el que preste sus servicios profesionales, salvo autorización legal o contractual;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '241',
            'descripcion' => 'd) Ejecutar actos de violencia, malos tratos, injurias o calumnias contra superiores, subalternos, compañeros de trabajo, socios, clientes o funcionarios del Consejo Profesional Nacional de Ingeniería respectivo o alguno de sus Consejos Regionales o Seccionales;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '242',
            'descripcion' => 'e) Ejecutar en el lugar donde ejerza su profesión, actos que atenten contra la moral y las buenas costumbres;(INEXEQUIBLE)', 
            'idarticulo' => '51'),
        array(
            'iditem' => '243',
            'descripcion' => 'f) El reiterado e injustificado incumplimiento de las obligaciones civiles, comerciales o laborales, que haya contraído con ocasión del ejercicio de su profesión o de actividades relacionadas con este;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '244',
            'descripcion' => 'g) Causar, intencional o culposamente, daño o pérdida de bienes, elementos, equipos, herramientas o documentos que hayan llegado a su poder por razón del ejercicio de su profesión;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '245',
            'descripcion' => 'h) Proferir, en actos oficiales o privados relacionados con el ejercicio de la profesión, expresiones injuriosas o calumniosas contra el Consejo Profesional Nacional de Ingeniería, los miembros de la Junta de Consejeros o sus funcionarios; contra cualquier autoridad relacionada con el ámbito de la ingeniería o contra alguna de sus agremiaciones o sus directivas;(INEXEQUIBLE)', 
            'idarticulo' => '51'),
        array(
            'iditem' => '246',
            'descripcion' => 'i) Incumplir las decisiones disciplinarias que imponga el Consejo Profesional Nacional de Ingeniería respectivo u obstaculizar su ejecución;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '247',
            'descripcion' => 'j) Solicitar o recibir directamente o por interpuesta persona, gratificaciones, dádivas o recompensas en razón del ejercicio de su profesión, salvo autorización contractual o legal;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '248',
            'descripcion' => 'k) Participar en licitaciones, concursar o suscribir contratos estatales cuyo objeto esté relacionado con el ejercicio de la ingeniería, estando incurso en alguna de las inhabilidades e incompatibilidades que establece la Constitución y la ley;', 
            'idarticulo' => '51'),
        array(
            'iditem' => '249',
            'descripcion' => 'l) Las demás prohibiciones incluidas en la presente ley y normas que la complementen y reglamenten.', 
            'idarticulo' => '51'),
        array(
            'iditem' => '250',
            'descripcion' => 'a) Interesarse por el bien público, con el objeto de contribuir con sus conocimientos, capacidad y experiencia para servir a la humanidad; <Jurisprudencia Vigencia>(INEXEQUIBLE)', 
            'idarticulo' => '52'),
        array(
            'iditem' => '251',
            'descripcion' => 'b) Cooperar para el progreso de la sociedad, aportando su colaboración intelectual y material en obras culturales, ilustración técnica, ciencia aplicada e investigación científica;(INEXEQUIBLE)', 
            'idarticulo' => '52'),
        array(
            'iditem' => '252',
            'descripcion' => 'c) Aplicar el máximo de su esfuerzo en el sentido de lograr una clara expresión hacia la comunidad de los aspectos técnicos y de los asuntos relacionados con sus respectivas, profesiones y su ejercicio;(INEXEQUIBLE)', 
            'idarticulo' => '52'),
        array(
            'iditem' => '254',
            'descripcion' => 'd) Estudiar cuidadosamente el ambiente que será afectado en cada propuesta (sic) de tarea (sic), evaluando los impactos ambientales en los ecosistemas involucrados, urbanizados o naturales, incluido el entorno socioeconómico, seleccionando la mejor alternativa para contribuir a un desarrollo ambientalmente sano y sostenible, con el objeto de lograr la mejor calidad de vida para la población;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '255',
            'descripcion' => 'e) Rechazar toda clase de recomendaciones en trabajos que impliquen daños evitables para el entorno humano y la naturaleza, tanto en espacios abiertos, como en el interior de edificios, evaluando su impacto ambiental, tanto en corto como en largo plazo;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '256',
            'descripcion' => 'f) Ejercer la profesión sin supeditar sus conceptos o sus criterios profesionales a actividades partidistas;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '257',
            'descripcion' => 'g) Ofrecer desinteresadamente sus servicios profesionales en caso de calamidad pública;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '258',
            'descripcion' => 'h) Proteger la vida y salud de los miembros de la comunidad, evitando riesgos innecesarios en la ejecución de los trabajos;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '259',
            'descripcion' => 'i) Abstenerse de emitir conceptos profesionales, sin tener la convicción absoluta de estar debidamente informados al respecto;', 
            'idarticulo' => '52'),
        array(
            'iditem' => '260',
            'descripcion' => 'j) Velar por la protección de la integridad del patrimonio nacional.', 
            'idarticulo' => '52'),
        array(
            'iditem' => '261',
            'descripcion' => 'a) Ofrecer o aceptar trabajos en contra de las disposiciones legales vigentes, o aceptar tareas que excedan la incumbencia que le otorga su título y su propia preparación;', 
            'idarticulo' => '53'),
        array(
            'iditem' => '262',
            'descripcion' => 'b) Imponer su firma, a título gratuito u oneroso, en planos, especificaciones, dictámenes, memorias, informes, solicitudes de licencias urbanísticas, solicitudes de licencias de construcción y toda otra documentación relacionada con el ejercicio profesional, que no hayan sido estudiados, controlados o ejecutados personalmente;', 
            'idarticulo' => '53'),
        array(
            'iditem' => '263',
            'descripcion' => 'c) Expedir, permitir o contribuir para que se expidan títulos, diplomas, matrículas, tarjetas de matrícula profesional; certificados de inscripción profesional o tarjetas de certificado de inscripción profesional y/o certificados de vigencia de matrícula profesional, a personas que no reúnan los requisitos legales o reglamentarios para ejercer estas profesiones o no se encuentren debidamente inscritos o matriculados;', 
            'idarticulo' => '53'),
        array(
            'iditem' => '264',
            'descripcion' => 'd) Hacer figurar su nombre en anuncios, membretes, sellos, propagandas y demás medios análogos junto con el de personas que ejerzan ilegalmente la profesión;', 
            'idarticulo' => '53'),
        array(
            'iditem' => '265',
            'descripcion' => 'e) iniciar o permitir el inicio de obras de construcción sin haber obtenido de la autoridad competente la respectiva licencia o autorización.', 
            'idarticulo' => '53'),
        array(
            'iditem' => '266',
            'descripcion' => 'a) Contribuir con su conducta profesional y con todos los medios a su alcance para que en el consenso público se preserve un exacto concepto de estas profesiones, de su dignidad y del alto respeto que merecen;(INEXEQUIBLE)', 
            'idarticulo' => '54'),
        array(
            'iditem' => '267',
            'descripcion' => 'b) Respetar y hacer respetar todas las disposiciones legales y reglamentaras que incidan en actos de estas profesiones, así como denunciar todas sus transgresiones;', 
            'idarticulo' => '54'),
        array(
            'iditem' => '268',
            'descripcion' => 'c) Velar por el buen prestigio de estas profesiones;', 
            'idarticulo' => '54'),
        array(
            'iditem' => '269',
            'descripcion' => 'd) Sus medios de propaganda deberán ajustarse a las reglas de la prudencia y al decoro profesional, sin hacer uso de medios de publicidad con avisos exagerados que den lugar a equívocos sobre su especialidad o idoneidad profesional.', 
            'idarticulo' => '54'),
        array(
            'iditem' => '270',
            'descripcion' => 'a) Recibir o conceder comisiones, participaciones u otros beneficios ilegales o injustificados con el objeto de gestionar, obtener o acordar designaciones de índole profesional o la encomienda de trabajo profesional.', 
            'idarticulo' => '55'),
        array(
            'iditem' => '271',
            'descripcion' => 'a) Abstenerse de emitir públicamente juicios adversos sobre la actuación de algún colega, señalando errores profesionales en que presuntamente haya incurrido, a no ser de que ello sea indispensable por razones ineludibles de interés general o, que se le haya dado anteriormente la posibilidad de reconocer y rectificar aquellas actuaciones y errores, haciendo dicho profesional caso omiso de ello;', 
            'idarticulo' => '56'),
        array(
            'iditem' => '272',
            'descripcion' => 'b) Obrar con la mayor prudencia y diligencia cuando se emitan conceptos sobre las actuaciones de los demás profesionales;', 
            'idarticulo' => '56'),
        array(
            'iditem' => '273',
            'descripcion' => 'c) Fijar para los colegas que actúen como colaboradores o empleados suyos, salarios, honorarios, retribuciones o compensaciones justas y adecuadas, acordes con la dignidad de las profesiones y la importancia de los servicios que prestan;', 
            'idarticulo' => '56'),
        array(
            'iditem' => '274',
            'descripcion' => 'd) Respetar y reconocer la propiedad intelectual de los demás profesionales sobre sus diseños y proyectos.', 
            'idarticulo' => '56'),
        array(
            'iditem' => '275',
            'descripcion' => 'a) Utilizar sin autorización de sus legítimos autores y para su aplicación en trabajos profesionales propios, los estudios, cálculos, planos, diseños y software y demás documentación perteneciente a aquellos, salvo que la tarea profesional lo requiera, caso en el cual se deberá dar aviso al autor de tal utilización;', 
            'idarticulo' => '57'),
        array(
            'iditem' => '276',
            'descripcion' => 'b) Difamar, denigrar o criticar injustamente a sus colegas, o contribuir en forma directa o indirecta a perjudicar su reputación o la de sus proyectos o negocios con motivo de su actuación profesional;', 
            'idarticulo' => '57'),
        array(
            'iditem' => '277',
            'descripcion' => 'c) Usar métodos de competencia desleal con los colegas;', 
            'idarticulo' => '57'),
        array(
            'iditem' => '278',
            'descripcion' => 'd) Designar o influir para que sean designados en cargos técnicos que deban ser desempeñados por los profesionales de que trata el presente Código, a personas carentes de los títulos y calidades que se exigen legalmente;', 
            'idarticulo' => '57'),
        array(
            'iditem' => '279',
            'descripcion' => 'e) Proponer servicios con reducción de precios, luego de haber conocido las propuestas de otros profesionales;', 
            'idarticulo' => '57'),
        array(
            'iditem' => '280',
            'descripcion' => 'f) Revisar trabajos de otro profesional sin conocimiento y aceptación previa del mismo, a menos que este se haya separado completamente de tal trabajo.', 
            'idarticulo' => '57'),
        array(
            'iditem' => '281',
            'descripcion' => 'a) Mantener el secreto y reserva, respecto de toda circunstancia relacionada con el cliente y con los trabajos que para él se realizan, salvo obligación legal de revelarla o requerimiento del Consejo Profesional respectivo;', 
            'idarticulo' => '58'),
        array(
            'iditem' => '282',
            'descripcion' => 'b) Manejar con honestidad y pulcritud los fondos que el cliente le confiare con destino a desembolsos exigidos por los trabajos a su cargo y rendir cuentas claras, precisas y frecuentes. Todo ello independientemente y sin perjuicio de lo establecido en las leyes vigentes;', 
            'idarticulo' => '58'),
        array(
            'iditem' => '283',
            'descripcion' => 'c) Dedicar toda su aptitud y atender con la mayor diligencia y probidad, los asuntos encargados por su cliente;', 
            'idarticulo' => '58'),
        array(
            'iditem' => '284',
            'descripcion' => 'd) Los profesionales que dirijan el cumplimiento de contratos entre sus clientes y terceras personas, son ante todo asesores y guardianes de los intereses de sus clientes y en ningún caso, les es lícito actuar en perjuicio de aquellos terceros.', 
            'idarticulo' => '58'),
        array(
            'iditem' => '285',
            'descripcion' => 'a) Ofrecer la prestación de servicios cuyo objeto, por cualquier razón de orden técnico, jurídico, reglamentario, económico o social, sea de dudoso o imposible cumplimiento, o los que por circunstancias de idoneidad personal, no pudiere satisfacer;', 
            'idarticulo' => '59'),
        array(
            'iditem' => '286',
            'descripcion' => 'b) Aceptar para su beneficio o el de terceros, comisiones, descuentos, bonificaciones u otras análogas ofrecidas por proveedores de equipos, insumos, materiales, artefactos o estructuras, por contratistas y/o por otras personas directamente interesadas en la ejecución de los trabajos que proyecten o dirijan, salvo autorización legal o contractual.', 
            'idarticulo' => '59'),
        array(
            'iditem' => '287',
            'descripcion' => 'a) Actuar de manera imparcial, cuando por las funciones de su cargo público o privado, sean responsables de fijar, preparar o evaluar pliegos de condiciones de licitaciones o concursos;', 
            'idarticulo' => '60'),
        array(
            'iditem' => '288',
            'descripcion' => 'b) Los profesionales que se hallen ligados entre sí por razón de jerarquía, ya sea en la administración pública o privada, se deben mutuamente, independiente y sin perjuicio de aquella relación, el respeto y el trato impuesto por su condición de colegas.(INEXEQUIBLE)', 
            'idarticulo' => '60'),
        array(
            'iditem' => '289',
            'descripcion' => 'a) Participar en el proceso de evaluación de tareas profesionales de colegas, con quienes se tuviese vinculación de parentesco, hasta el grado fijado por las normas de contratación pública, o vinculación societaria de hecho o de derecho. La violación de esta norma se imputará también al profesional que acepte tal evaluación;', 
            'idarticulo' => '61'),
        array(
            'iditem' => '290',
            'descripcion' => 'b) Los profesionales superiores jerárquicos, deben abstenerse de proceder en forma que desprestigie o menoscabe a los profesionales que ocupen cargos subalternos al suyo;(INEXEQUIBLE)', 
            'idarticulo' => '61'),
        array(
            'iditem' => '291',
            'descripcion' => 'c) Cometer, permitir o contribuir a que se cometan actos de injusticia en perjuicio de otro profesional, tales como destitución, reemplazo, disminución de categoría, aplicación de penas disciplinarias, sin causa demostrada y justa.(INEXEQUIBLE)', 
            'idarticulo' => '61'),
        array(
            'iditem' => '292',
            'descripcion' => 'a) Los profesionales que se dispongan a participar en un concurso o licitación por invitación pública o privada y consideren que las bases pudieren transgredir las normas de la ética profesional, deberán denunciar ante el Consejo Profesional respectivo la existencia de dicha transgresión;', 
            'idarticulo' => '62'),
        array(
            'iditem' => '293',
            'descripcion' => 'b) Los profesionales que participen en un concurso o licitación están obligados a observar la más estricta disciplina y el máximo respeto hacia los miembros del jurado o junta de selección, los funcionarios y los demás participantes.(INEXEQUIBLE)', 
            'idarticulo' => '62'),
        array(
            'iditem' => '294',
            'descripcion' => 'a) Los profesionales que hayan actuado como asesores de la parte contratante en un concurso o licitación deberán abstenerse de intervenir directa o indirectamente en las tareas profesionales requeridas para el desarrollo del trabajo que dio lugar al mismo, salvo que su intervención estuviese establecida en las bases del concurso o licitación.', 
            'idarticulo' => '63'),
        array(
            'iditem' => '295',
            'descripcion' => 'a) Los profesionales que actúen simultáneamente como representantes técnicos o asesores de más de una empresa que desarrolle idénticas actividades y en un mismo tema, sin expreso consentimiento y autorización de las mismas para tal actuación;', 
            'idarticulo' => '64'),
        array(
            'iditem' => '296',
            'descripcion' => 'b) Los profesionales que en ejercicio de sus actividades públicas o privadas hubiesen intervenido en determinado asunto, no podrán luego actuar o asesorar directa o indirectamente a la parte contraria en la misma cuestión;', 
            'idarticulo' => '64'),
        array(
            'iditem' => '297',
            'descripcion' => 'c) Los profesionales no deben intervenir como peritos o actuar en cuestiones que comprendan las inhabilidades e incompatibilidades generales de ley.', 
            'idarticulo' => '64'),
        array(
            'iditem' => '298',
            'descripcion' => 'a) Amonestación escrita;', 
            'idarticulo' => '66'),
        array(
            'iditem' => '299',
            'descripcion' => 'b) Suspensión en el ejercicio de la profesión hasta por cinco (5) años;', 
            'idarticulo' => '66'),
        array(
            'iditem' => '300',
            'descripcion' => 'c) Cancelación de la matrícula profesional, del certificado de inscripción profesional o del certificado de matrícula profesional.', 
            'idarticulo' => '66'),
        array(
            'iditem' => '301',
            'descripcion' => 'a) Las faltas calificadas por el Consejo Regional o Seccional como leves, siempre y cuando el profesional disciplinado no registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de amonestación escrita;', 
            'idarticulo' => '67'),
        array(
            'iditem' => '302',
            'descripcion' => 'b) Las faltas calificadas por el Consejo Regional o Seccional como leves, cuando el profesional disciplinado registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional hasta por el término de seis (6) meses;', 
            'idarticulo' => '67'),
        array(
            'iditem' => '303',
            'descripcion' => 'c) Las faltas calificadas por el Consejo Regional o Seccional como graves, siempre y cuando el profesional disciplinado no registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional por un término de seis (6) meses a dos (2) años;', 
            'idarticulo' => '67'),
        array(
            'iditem' => '304',
            'descripcion' => 'd) Las faltas calificadas por el Consejo Regional o Seccional como graves, cuando el profesional disciplinado registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional por un término de dos (2) a cinco (5) años;', 
            'idarticulo' => '67'),
        array(
            'iditem' => '305',
            'descripcion' => 'e) Las faltas calificadas por el Consejo Regional o Seccional como gravísimas, siempre darán lugar a la aplicación de la sanción de cancelación de la matrícula profesional.', 
            'idarticulo' => '67'),
        array(
            'iditem' => '306',
            'descripcion' => 'a) La conducta o el hecho debe haber sido cometido por un profesional de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares, debidamente matriculado;', 
            'idarticulo' => '69'),
        array(
            'iditem' => '307',
            'descripcion' => 'b) La conducta o el hecho debe ser intencional o culposo;', 
            'idarticulo' => '69'),
        array(
            'iditem' => '308',
            'descripcion' => 'c) El hecho debe haber sido cometido en ejercicio de la profesión o de actividades conexas o relacionadas con esta;', 
            'idarticulo' => '69'),
        array(
            'iditem' => '309',
            'descripcion' => 'd) La conducta debe ser violatoria de deberes, prohibiciones, inhabilidades o incompatibilidades inherentes a la profesión de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares;', 
            'idarticulo' => '69'),
        array(
            'iditem' => '310',
            'descripcion' => 'e) La conducta debe ser apreciable objetivamente y procesalmente debe estar probada;', 
            'idarticulo' => '69'),
        array(
            'iditem' => '311',
            'descripcion' => 'f) La sanción disciplinaria debe ser la consecuencia lógica de un debido proceso, que se enmarque dentro de los postulados del artículo 29 de la Constitución Política y específicamente, del régimen disciplinario establecido en la presente ley.', 
            'idarticulo' => '69'),
        array(
            'iditem' => '312',
            'descripcion' => 'a) El grado de culpabilidad;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '313',
            'descripcion' => 'b) El grado de perturbación a terceros o a la sociedad;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '314',
            'descripcion' => 'c) La falta de consideración con sus clientes, patronos, subalternos y, en general, con todas las personas a las que pudiera afectar el profesional disciplinado con su conducta;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '315',
            'descripcion' => 'd) La reiteración en la conducta;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '316',
            'descripcion' => 'e) La jerarquía y mando que el profesional disciplinado tenga dentro de su entidad, sociedad, la persona jurídica a la que pertenece o representa, etc.;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '317',
            'descripcion' => 'f) La naturaleza de la falta y sus efectos, según la trascendencia social de la misma, el mal ejemplo dado, la complicidad con otros profesionales y el perjuicio causado;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '318',
            'descripcion' => 'g) Las modalidades o circunstancias de la falta, teniendo en cuenta el grado de preparación, el grado de participación en la comisión de la misma y el aprovechamiento de la confianza depositada en el profesional disciplinado;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '319',
            'descripcion' => 'h) Los motivos determinantes, según se haya procedido por causas innobles o fútiles, o por nobles y altruistas;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '320',
            'descripcion' => 'i) El haber sido inducido por un superior a cometerla;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '321',
            'descripcion' => 'j) El confesar la falta antes de la formulación de cargos, haciéndose responsable de los perjuicios causados;', 
            'idarticulo' => '71'),
        array(
            'iditem' => '322',
            'descripcion' => 'k) Procurar, por iniciativa propia, resarcir el daño o compensar el perjuicio causado, antes de que le sea impuesta la sanción.', 
            'idarticulo' => '71'),
        array(
            'iditem' => '323',
            'descripcion' => 'a) Derivar, de manera directa o por interpuesta persona, indebido o fraudulento provecho patrimonial en ejercicio de la profesión, con consecuencias graves para la parte afectada;', 
            'idarticulo' => '72'),
        array(
            'iditem' => '324',
            'descripcion' => 'b) Obstaculizar, en forma grave, las investigaciones que realice el Consejo Profesional de Ingeniería respectivo;', 
            'idarticulo' => '72'),
        array(
            'iditem' => '325',
            'descripcion' => 'c) El abandono injustificado de los encargos o compromisos profesionales, cuando con tal conducta causen grave detrimento al patrimonio económico del cliente o se afecte, de la misma forma, el patrimonio público;', 
            'idarticulo' => '72'),
        array(
            'iditem' => '326',
            'descripcion' => 'd) La utilización fraudulenta de las hojas de vida de sus colegas para participar en concursos, licitaciones públicas, lo mismo que para suscribir los respectivos contratos;', 
            'idarticulo' => '72'),
        array(
            'iditem' => '327',
            'descripcion' => 'e) Incurrir en algún delito que atente contra sus clientes, colegas o autoridades de la República, siempre y cuando la conducta punible comprenda el ejercicio de la ingeniería o de alguna de sus profesiones auxiliares;', 
            'idarticulo' => '72'),
        array(
            'iditem' => '328',
            'descripcion' => 'f) Cualquier violación gravísima, según el criterio del Consejo respectivo, del régimen de deberes, obligaciones y prohibiciones que establecen el Código Ética y la presente ley.', 
            'idarticulo' => '72'),
        array(
            'iditem' => '329',
            'descripcion' => 'a) Por fuerza mayor o caso fortuito;', 
            'idarticulo' => '74'),
        array(
            'iditem' => '330',
            'descripcion' => 'b) En estricto cumplimiento de un deber legal;', 
            'idarticulo' => '74'),
        array(
            'iditem' => '331',
            'descripcion' => 'c) En cumplimiento de orden legítima de autoridad competente emitida con las formalidades legales.', 
            'idarticulo' => '74')

    );

    private $paragrafos = array(
		array(
			'idparagrafo' => '500',
			'descripcion' => 'PARÁGRAFO. La instrucción, formación, enseñanza, docencia o cátedra dirigida a los estudiantes que aspiren a uno de los títulos profesionales, afines o auxiliares de la Ingeniería, en las materias o asignaturas que impliquen el conocimiento de la profesión, como máxima actividad del ejercicio profesional, solo podrá ser impartida por profesionales de la ingeniería, sus profesiones afines o sus profesiones auxiliares, según el caso, debidamente matriculados.', 
            'idarticulo' => '21'),
        array(
            'idparagrafo' => '501',
            'descripcion' => 'PARÁGRAFO. En los casos en que los contratantes del sector público o privado, o cualquier usuario de los servicios de ingeniería, pretendan establecer si un profesional se encuentra legalmente habilitado o no, para ejercer la profesión, podrán sin perjuicio de los requisitos establecidos en el presente artículo, requerir al Copnia la expedición del respectivo certificado de vigencia.', 
            'idarticulo' => '25'),
        array(
            'idparagrafo' => '502',
            'descripcion' => 'PARÁGRAFO 1o. Los títulos académicos de postgrado de los profesionales matriculados no serán susceptibles de inscripción en el registro profesional de ingeniería, por lo tanto, cuando se necesite acreditar tal calidad, bastará con la presentación del título de postgrado respectivo, debidamente otorgado por universidad o institución autorizada por el Estado para tal efecto. Si el título de postgrado fue otorgado en el exterior, solo se aceptará debidamente consularizado o apostillado de acuerdo con las normas que rigen la materia.', 
            'idarticulo' => '26'),
        array(
            'idparagrafo' => '503',
            'descripcion' => 'PARÁGRAFO 2o. La información que los profesionales aporten como requisitos de su inscripción en el registro profesional respectivo, solamente podrá ser utilizada por el Copnia para efectos del control y vigilancia del ejercicio profesional correspondiente, excepto cuando sea requerida por las demás autoridades de fiscalización y control para lo de su competencia o cuando medie orden judicial.', 
            'idarticulo' => '26'),
        array(
            'idparagrafo' => '504',
            'descripcion' => 'PARÁGRAFO. También incurre en ejercicio ilegal de la profesión, el profesional de la ingeniería, de alguna de sus profesiones afines o profesiones auxiliares, que estando debidamente inscrito en el registro profesional de ingeniería, ejerza la profesión estando suspendida su matrícula profesional, certificado de inscripción profesional o certificado de matrícula, respectivamente.', 
            'idarticulo' => '32'),
        array(
            'idparagrafo' => '505',
            'descripcion' => 'PARÁGRAFO. Si quien permite, o encubre el ejercicio de la profesión, por parte de quien no reúne los requisitos establecidos en la presente ley, está matriculado o inscrito como ingeniero o profesión afín o auxiliar, podrá ser suspendido del ejercicio legal de la profesión hasta por el término de cinco años.', 
            'idarticulo' => '33'),
        array(
            'idparagrafo' => '506',
            'descripcion' => 'PARÁGRAFO. Las multas que se impongan como sanción por el incumplimiento de la presente ley y sus normas reglamentarias, deberán consignarse a favor del Tesoro Municipal del lugar donde se cometa la infracción y serán impuestas por el respectivo Alcalde Municipal o por quien haga sus veces, mediante la aplicación de las normas de procedimiento establecidas para la investigación y sanción de las contravenciones especiales, según el Código Nacional de Policía o norma que lo sustituya o modifique.', 
            'idarticulo' => '34'),
        array(
            'idparagrafo' => '507',
            'descripcion' => 'PARÁGRAFO. Al representante legal de la persona jurídica que omita el cumplimiento de lo dispuesto en el presente artículo se le aplicarán las sanciones previstas para el ejercicio ilegal de profesión y oficio reglamentado, mediante la aplicación del procedimiento establecido para las contravenciones especiales de policía o aquel que lo sustituya.', 
            'idarticulo' => '36'),
        array(
            'idparagrafo' => '508',
            'descripcion' => 'PARÁGRAFO. Cuando la obra se trate de aquellas a las que se refiere la Ley 400 de 1997, además de los requisitos establecidos en la presente ley, se deberá cumplir con los establecidos en tal régimen o en la norma que lo sustituya, so pena de incurrir en las sanciones previstas por violación del Código de Ética y el correcto ejercicio de la profesión.', 
            'idarticulo' => '37'),
        array(
            'idparagrafo' => '509',
            'descripcion' => 'PARÁGRAFO. Lo dispuesto en este artículo se aplicará en todas sus partes, tanto a las propuestas que se presenten, como a los contratos de igual naturaleza y que, con el mismo objetivo, se celebren con las sociedades de economía mixta y con los establecimientos públicos y empresas industriales o comerciales del orden nacional, departamental, distrital o municipal y aquellas descentralizadas por servicios.', 
            'idarticulo' => '39'),
        array(
            'idparagrafo' => '510',
            'descripcion' => 'PARÁGRAFO. Cuando previa autorización del Ministerio de Trabajo y tratándose de personal estrictamente técnico o científico indispensable, fuere necesaria una mayor participación de profesionales extranjeros que la establecida anteriormente, el patrono o la firma o entidad que requiera tal labor, dispondrá de un (1) año contado a partir de la fecha de la iniciación de labores, para suministrar adecuada capacitación a los profesionales nacionales, con el fin de reemplazar a los extranjeros, hasta completar el mínimo de ochenta por ciento (80%) de nacionales.', 
            'idarticulo' => '41'),
        array(
            'idparagrafo' => '511',
            'descripcion' => 'PARÁGRAFO 1o.Los requisitos y el trámite establecidos en este artículo se aplicarán para todas las ramas de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, aunque tengan reglamentación especial y será otorgado por el Consejo Profesional Nacional de Ingeniería, Copnia, exclusivamente. La autoridad competente otorgará la visa respectiva, sin perjuicio del permiso temporal de que trata el presente artículo.(INEXEQUIBLE)', 
            'idarticulo' => '42'),
        array(
            'idparagrafo' => '512',
            'descripcion' => 'PARÁGRAFO 2o. Se eximen de la obligación de tramitar el Permiso Temporal a que se refiere el presente Artículo, los profesionales extranjeros invitados a dictar conferencias, seminarios, simposios, congresos, talleres de tipo técnico o científico, siempre y cuando no tengan carácter permanente.', 
            'idarticulo' => '42'),
        array(
            'idparagrafo' => '513',
            'descripcion' => 'PARÁGRAFO 3o. Si el profesional beneficiario del permiso temporal pretende laborar de manera indefinida en el país, deberá homologar o convalidar el título de acuerdo con las normas que rigen la materia y tramitar la matrícula profesional o el certificado de inscripción profesional, según el caso.', 
            'idarticulo' => '42'),
        array(
            'idparagrafo' => '514',
            'descripcion' => 'PARÁGRAFO. Para ejercer su función de policía administrativa, el Copnia contará con el apoyo, cuando así lo solicite, de las autoridades administrativas y de policía, nacionales, seccionales y locales, según el caso.', 
            'idarticulo' => '44'),
        array(
            'idparagrafo' => '515',
            'descripcion' => 'PARÁGRAFO. En todo caso, con el lleno de los requisitos establecidos en el presente artículo el Consejo Profesional Nacional de Ingeniería, Copnia, podrá crear Consejos Regionales, donde las necesidades de la función de control, inspección y vigilancia lo exijan. Estos tendrán jurisdicción sobre dos (2) o más departamentos.(INEXEQUIBLE)', 
            'idarticulo' => '46'),
        array(
            'idparagrafo' => '516',
            'descripcion' => 'PARÁGRAFO 1o. El período de los representantes elegidos en junta será de dos (2) años, pudiendo ser reelegidos solo para el período subsiguiente.', 
            'idarticulo' => '47'),
        array(
            'idparagrafo' => '517',
            'descripcion' => 'PARÁGRAFO 2o. Los delegados deberán ser ingenieros de las ramas inspeccionadas, vigiladas y controladas por el Copnia, debidamente matriculados.', 
            'idarticulo' => '47'),
        array(
            'idparagrafo' => '518',
            'descripcion' => 'PARÁGRAFO. El Código de Ética Profesional adoptado mediante la presente ley será el marco del comportamiento profesional del ingeniero en general, de sus profesionales afines y de sus profesionales auxiliares y su violación será sancionada mediante el procedimiento establecido en el presente título.', 
            'idarticulo' => '48'),
        array(
            'idparagrafo' => '519',
            'descripcion' => 'PARÁGRAFO 1o. No obstante, en los casos de público conocimiento o hecho notorio y cuya gravedad lo amerite, a juicio de la Junta de Consejeros del Consejo Profesional Nacional respectivo, los Consejos Seccionales o Regionales deberán asumir la investigación disciplinaria de oficio.', 
            'idarticulo' => '79'),
        array(
            'idparagrafo' => '520',
            'descripcion' => 'PARÁGRAFO 2o. La Asesoría Jurídica del Consejo Profesional de Ingeniería respectivo u oficina que haga sus veces, resolverá todos los casos de conflictos de competencias, decisión de única instancia y en contra de la cual no procederá recurso alguno.', 
            'idarticulo' => '79'),
        array(
            'idparagrafo' => '521',
            'descripcion' => 'PARÁGRAFO. En todo caso que el quejoso sea renuente a rendir la ratificación juramentada y esta fuera absolutamente necesaria para poder continuar la investigación preliminar, por adolecer la queja de elementos suficientes para establecer alguna clase de indicio en contra del profesional o su debida identificación o individualización, la Secretaría Seccional respectiva ordenará sumariamente el archivo de la queja; actuación de la que rendirá informe a la Junta de Consejeros Seccionales y de la que dará aviso al Consejo Profesional Nacional.', 
            'idarticulo' => '80'),
        array(
            'idparagrafo' => '522',
            'descripcion' => 'PARÁGRAFO. Para el cumplimiento de los fines de la indagación preliminar, el funcionario competente hará uso de los medios de prueba legalmente reconocidos y podrá oír en versión libre y espontánea al profesional que considere necesario para determinar la individualización o identificación de los intervinientes en el hecho investigado.', 
            'idarticulo' => '83'),
        array(
            'idparagrafo' => '523',
            'descripcion' => 'PARÁGRAFO. Los salvamentos de voto respecto del fallo final, si los hay, deberán constar en el acta de la reunión respectiva.', 
            'idarticulo' => '88'),
        array(
            'idparagrafo' => '524',
            'descripcion' => 'PARÁGRAFO. Las funciones asignadas por leyes anteriores a Consejos Profesionales de Ingeniería y profesiones afines y auxiliares que a la fecha de la entrada en vigencia de la presente ley, no se hayan instalado o no estén funcionando, pasarán al Consejo Profesional de Ingeniería, Copnia', 
            'idarticulo' => '94')         
    );

    private $notas = array(
		array(
			'idnotas' => '600',//Esta en ARTICULO 4o(id=>23).no tiene items
			'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE.', 
            'iditem' => null,
            'idarticulo' => '23'),
        array(
            'idnotas' => '601',//Esta en ARTICULO 5o(id=>24).no tiene items
            'nota' => 'Nota: Sentencia C-191 de 2005. Corte Constitucional. El presente artículo fue declarado EXEQUIBLE de manera condicionada, en el entendido de que la facultad otorgada por la presente norma al COPNIA, tiene naturaleza exclusivamente técnica y no implica la posibilidad de agregar o excluir actividades a las que se refiere la clasificación nacional de ocupaciones en los subgrupos 02 y 03 o norma que la sustituya. Sentencia C-667 de 2005, Corte Constitucional. En relación con el presente artículo, la Corte Constitucional declaró estarse a lo resuelto en la Sentencia C-191 de 2005.', 
            'iditem' => null,
            'idarticulo' => '24'),
        array(
            'idnotas' => '602',//Esta en ARTICULO 6o(id=>25).no tiene items
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE en el entendido de que los profesionales de disciplinas relacionadas con la ingeniería que cuenten con consejos profesionales propios deberán inscribirse y obtener la matrícula ante estos consejos, después de pagar los derechos respectivos, mientras estos consejos no sean eliminados o modificados por el Legislador, a iniciativa del Gobierno', 
            'iditem' => null,
            'idarticulo' => '25'),
        array(
            'idnotas' => '603',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE por los cargos analizados.', 
            'iditem' => '208',
            'idarticulo' => '27'),
        array(
            'idnotas' => '604',//Esta en ARTICULO 9o(id=>28).no tiene items
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE en el entendido de que los profesionales de disciplinas relacionadas con la ingeniería que cuenten con consejos profesionales propios deberán inscribirse y obtener la Matrícula ante estos consejos, después de pagar los derechos respectivos, mientras estos Consejos no sean eliminados o modificados por el Legislador, a iniciativa del Gobierno', 
            'iditem' => null,
            'idarticulo' => '28'),
        array(
            'idnotas' => '605',//Esta en ARTICULO 18(id=>37).no tiene items
            'nota' => 'Nota: Sentencia C-191 de 2005, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE condicionalmente en el entendido de que la expresión “relacionado con” comprende exclusivamente las relaciones directas y necesarias con el ejercicio de la ingeniería.', 
            'iditem' => null,
            'idarticulo' => '37'),
        array(
            'idnotas' => '606',//Esta en ARTICULO 20(id=>39).no tiene items
            'nota' => 'Nota: Sentencia C-191 de 2005, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE, salvo el aparte tachado del inciso 2o. que se declara INEXEQUIBLE.', 
            'iditem' => null,
            'idarticulo' => '39'),
        array(
            'idnotas' => '607',//Esta en ARTICULO 23(id=>42).no tiene items
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado CONDICIONALMENTE EXEQUIBLE "... en el entendido de que los profesionales titulados y domiciliados en el exterior en disciplinas relacionadas con la ingeniería y que deseen obtener un permiso temporal para trabajar deberán acudir al COPNIA, siempre y cuando su especialidad no cuente con un consejo profesional propio encargado de esa función. La declaración se restringe al cargo analizado", salvo el aparte tachado que se declara INEXEQUIBLE', 
            'iditem' => null,
            'idarticulo' => '42'),
        array(
            'idnotas' => '608',//Esta en ARTICULO 24(id=>43).no tiene items
            'nota' => 'Notas:Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política.Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.', 
            'iditem' => null,
            'idarticulo' => '43'),
        array(
            'idnotas' => '609',//Esta en ARTICULO 25(id=>44).no tiene items
            'nota' => 'Notas: Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política. Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.', 
            'iditem' => null,
            'idarticulo' => '44'),
        array(
            'idnotas' => '610',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. Literal n) declarado INEXEQUIBLE', 
            'iditem' => '222',
            'idarticulo' => '45'),
        array(
            'idnotas' => '611',
            'nota' => 'Notas: Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política. Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.', 
            'iditem' => '230',
            'idarticulo' => null),
        array(
            'idnotas' => '612',//Esta en ARTICULO 27(id=>46).no tiene items
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado INEXEQUIBLE.', 
            'iditem' => null,
            'idarticulo' => '46'),
        array(
            'idnotas' => '613',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.', 
            'iditem' => '233',
            'idarticulo' => null),
        array(
            'idnotas' => '614',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal d) declarado INEXEQUIBLE.', 
            'iditem' => '234',
            'idarticulo' => null),
        array(
            'idnotas' => '615',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal d) declarado CONDICIONALMENTE EXEQUIBLE, "... en el entendido de que las conductas descritas no son sancionables cuando se cometan respecto de un colega o socio en un contexto ajeno al ámbito profesional".', 
            'iditem' => '241',
            'idarticulo' => null),
        array(
            'idnotas' => '616',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal e) declarado INEXEQUIBLE.', 
            'iditem' => '242',
            'idarticulo' => null),
        array(
            'idnotas' => '617',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal h) declarado INEXEQUIBLE.', 
            'iditem' => '245',
            'idarticulo' => null),
        array(
            'idnotas' => '618',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal a) declarado INEXEQUIBLE.', 
            'iditem' => '250',
            'idarticulo' => null),
        array(
            'idnotas' => '619',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.', 
            'iditem' => '251',
            'idarticulo' => null),
        array(
            'idnotas' => '620',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.', 
            'iditem' => '252',
            'idarticulo' => null),
        array(
            'idnotas' => '621',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.', 
            'iditem' => '266',
            'idarticulo' => null),
        array(
            'idnotas' => '622',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado CONDICIONALMENTE EXEQUIBLE " ... en el entendido de que, para efectos disciplinarios, al definir si la retribución es justa y adecuada en cada caso la autoridad deberá tener como único parámetro de juicio todas las normas jurídicas vigentes, aplicables a la relación que se examina".', 
            'iditem' => '273',
            'idarticulo' => null),
        array(
            'idnotas' => '623',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.', 
            'iditem' => '279',
            'idarticulo' => null),
        array(
            'idnotas' => '624',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.', 
            'iditem' => '280',
            'idarticulo' => null),
        array(
            'idnotas' => '625',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.', 
            'iditem' => '281',
            'idarticulo' => null),
        array(
            'idnotas' => '626',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.', 
            'iditem' => '288',
            'idarticulo' => null),
        array(
            'idnotas' => '627',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.', 
            'iditem' => '290',
            'idarticulo' => null),
        array(
            'idnotas' => '628',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.', 
            'iditem' => '291',
            'idarticulo' => null),
        array(
            'idnotas' => '629',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.', 
            'iditem' => '293',
            'idarticulo' => null),
        array(
            'idnotas' => '630',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.', 
            'iditem' => '294',
            'idarticulo' => null),
        array(
            'idnotas' => '631',
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.', 
            'iditem' => '296',
            'idarticulo' => null),
        array(
            'idnotas' => '632',///Esta en ARTICULO 78(id=>94).no tiene items
            'nota' => 'Nota: Sentencia C-570 de 2004, Corte Constitucional. Artículo CONDICIONALMENTE EXEQUIBLE "... en el entendido de que la derogación de normas que allí se ordena no comprende las relacionadas con la creación y asignación de funciones a los consejos profesionales existentes para especialidades de la ingeniería y las profesiones afines y auxiliares de esa disciplina". Auto 226 de 2003, Corte Constitucional. La Corte Constitucional dispuso: En consecuencia, los Artículos 26, 27 y 28 de la Ley 435 de 1998, están vigentes y aplican con todos sus efectos para el COPNIA.',
            'iditem' => null,
            'idarticulo' => '94')
    );
    
     /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        self::seedUser();
        $this->command->info('Tabla usuarios inicializada con datos!');

        self::seedLeyes();
        $this->command->info('Tabla leyes inicializada con datos!');

        self::seedTitulos();
        $this->command->info('Tabla titulos inicializada con datos!');

        self::seedCapitulos();
        $this->command->info('Tabla capitulos inicializada con datos!');

        self::seedArticulos();
        $this->command->info('Tabla articulos inicializada con datos!');

        self::seedItems();
        $this->command->info('Tabla items inicializada con datos!');

        self::seedParagrafos();
        $this->command->info('Tabla paragrafos inicializada con datos!');

        self::seedNotas();
        $this->command->info('Tabla notas inicializada con datos!');
    }

    private function seedUser(){
        DB::table('users')->delete();
        
        $u = new User;
        $u->name = 'Felipe Hidalgo';
        $u->email = 'juanfehidalgo@gmail.com';
        $u->password = bcrypt('1234');
        $u->rol = 'Editor';
        $u->save();

        $u = new User;
        $u->name = 'Diana Arcos';
        $u->email = 'dianarcos@gmail.com';
        $u->password = bcrypt('4321');
        $u->rol = 'Visitante';
        $u->save();

    }

    private function seedLeyes(){
        DB::table('leyes')->delete();
        foreach( $this->arrayLeyes as $leyes ) {
            $p = new Ley;
            $p->idLey = $leyes['idley'];
            $p->Ley = $leyes['ley'];
            $p->imagen = $leyes['imagen'];
            $p->leyDes = $leyes['desc'];
            $p->save();
      }


    }

    private function seedTitulos(){
        DB::table('titulos')->delete();
        foreach( $this->titulos as $titulo) {
            $p = new Titulo;
            $p->idTitulo = $titulo['idtitulo'];
            $p->titulo = $titulo['nombre'];
            $p->titDes = $titulo['descripcion'];
            $p->idLey = $titulo['idley'];
            $p->save();
        } 
    }

    private function seedCapitulos(){
        DB::table('capitulos')->delete();
        foreach( $this->capitulos as $capitulo) {
            $p = new Capitulo;
            $p->idCapitulo= $capitulo['idcapitulo'];
            $p->capitulo = $capitulo['nombre'];
            $p->capDes = $capitulo['descripcion'];
            $p->idTitulo = $capitulo['idtitulo'];
            $p->save();
        } 
    }

    private function seedArticulos(){
        DB::table('articulos')->delete();
        foreach( $this->articulos as $articulo) {
            $p = new Articulo;
            $p->idArticulo= $articulo['idarticulo'];
            $p->articulo = $articulo['nombre'];
            $p->artDes = $articulo['descripcion'];
            $p->idCapitulo = $articulo['idcapitulo'];
            $p->save();
        } 
    }

    private function seedItems(){   
        DB::table('items')->delete();
        foreach( $this->itemArticulo as $item) {
            $p = new Item;
            $p->idItem= $item['iditem'];
            $p->iteDes = $item['descripcion'];
            $p->idArticulo = $item['idarticulo'];
            $p->save();
        } 
    }

    private function seedParagrafos(){
        DB::table('paragrafos')->delete();
        foreach( $this->paragrafos as $paragrafo) {
            $p = new Paragrafo;
            $p->idParagrafo= $paragrafo['idparagrafo'];
            $p->parDes= $paragrafo['descripcion'];
            $p->idArticulo= $paragrafo['idarticulo'];
            $p->save();
        } 
    }

    private function seedNotas(){
        DB::table('notas')->delete();
        foreach( $this->notas as $nota) {
            $p = new Nota;
            $p->idNota= $nota['idnotas'];
            $p->nota= $nota['nota'];
            $p->idItem= $nota['iditem'];
            $p->idArticulo= $nota['idarticulo'];
            $p->save();
        }
    }

}
