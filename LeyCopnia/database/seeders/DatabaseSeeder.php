<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\User;
use App\Models\leyes;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;
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
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '26',
            'nombre' => 'ARTÍCULO 7o. REQUISITOS PARA OBTENER LA MATRÍCULA Y LA TARJETA DE MATRÍCULA PROFESIONAL.', 
            'descripcion'=> 'Sólo podrán ser matriculados en el Registro Profesional de Ingenieros y obtener tarjeta de matrícula profesional, para poder ejercer la profesión en el territorio nacional, quienes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '27',
            'nombre' => 'ARTÍCULO 8o. REQUISITOS PARA OBTENER EL CERTIFICADO DE INSCRIPCIÓN PROFESIONAL.', 
            'descripcion'=>'Sólo podrán ser matriculados en el Registro Profesional respectivo y obtener certificado de inscripción profesional y su respectiva tarjeta, para poder ejercer alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería en el territorio nacional, quienes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '28',
            'nombre' => 'ARTÍCULO 9o. PROCEDIMIENTO DE INSCRIPCIÓN Y MATRÍCULA.',
            'descripcion' => 'Para obtener la matrícula profesional o el certificado de que trata la presente ley, el interesado deberá presentar ante el Consejo Profesional Seccional o Regional de ingeniería del domicilio de la Universidad o Institución que otorgó el título, el original correspondiente con su respectiva acta de grado, fotocopia del documento de identidad y el recibo de consignación de los derechos que para el efecto fije el Copnia. Verificados los requisitos, el Seccional o Regional correspondiente, otorgará la matrícula o el certificado, según el caso, el cual deberá ser confirmado por el Consejo Nacional de Ingeniería en la sesión ordinaria siguiente a su recibo, ordenando la expedición del documento respectivo.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '29',
            'nombre' => 'ARTÍCULO 10.', 
            'descripcion'=> 'Para efectos de la inscripción o matrícula, toda Universidad o Institución de Educación Superior que otorgue títulos correspondientes a las profesiones aquí reglamentadas, deberá remitir de oficio o por requerimiento del Copnia, el listado de graduandos cada vez que este evento ocurra, tanto al Consejo Seccional o Regional de su domicilio, como al Consejo Nacional de Ingeniería, respectivamente.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '30',
            'nombre' => 'ARTÍCULO 11. POSESIÓN EN CARGOS, SUSCRIPCIÓN DE CONTRATOS O REALIZACIÓN DE DICTÁMENES TÉCNICOS QUE IMPLIQUEN EL EJERCICIO DE LA INGENIERÍA.', 
            'descripcion'=> ' Para poder tomar posesión de un cargo público o privado, en cuyo desempeño se requiera el conocimiento o el ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares; para participar en licitaciones públicas o privadas cuyo objeto implique el ejercicio de la ingeniería en cualquiera de sus ramas; para suscribir contratos de ingeniería y para emitir dictámenes sobre aspectos técnicos de la ingeniería o de algunas de sus profesiones auxiliares ante organismos estatales o personas de carácter privado, jurídicas o naturales; para presentarse o utilizar el título de Ingeniero para acceder a cargos o desempeños cuyo requisito sea poseer un título profesional, se debe exigir la presentación, en original, del documento que acredita la inscripción o el registro profesional de que trata la presente ley.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '31',
            'nombre' => 'ARTÍCULO 12. EXPERIENCIA PROFESIONAL.', 
            'descripcion'=> 'Para los efectos del ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares, la experiencia profesional solo se computará a partir de la fecha de expedición de la matrícula profesional o del certificado de inscripción profesional, respectivamente. Todas las matrículas profesionales, certificados de inscripción profesional y certificados de matrícula otorgados con anterioridad a la vigencia de la presente ley conservan su validez y se presumen auténticas.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '32',
            'nombre' => 'ARTÍCULO 13. EJERCICIO ILEGAL DE LA PROFESIÓN.', 
            'descripcion'=> 'Ejerce ilegalmente la profesión de la Ingeniera, de sus profesiones afines o de sus profesiones auxiliares y por lo tanto incurrirá en las sanciones que decrete la autoridad penal, administrativa o de policía correspondiente, la persona que sin cumplir los requisitos previstos en esta ley o en normas concordantes, practique cualquier acto comprendido en el ejercicio de estas profesiones. En igual infracción incurrirá la persona que, mediante avisos, propaganda, anuncios profesionales, instalación de oficinas, fijación de placas murales o en cualquier otra forma, actúe, se anuncie o se presente como Ingeniero o como Profesional Afín o como Profesional Auxiliar de la Ingeniería, sin el cumplimiento de los requisitos establecidos en la presente ley.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '33',
            'nombre' => 'ARTÍCULO 14. ENCUBRIMIENTO DEL EJERCICIO ILEGAL DE LA PROFESIÓN.', 
            'descripcion'=> 'El servidor público que en el ejercicio de su cargo, autorice, facilite, patrocine, encubra o permita el ejercicio ilegal de la ingeniería o de alguna de sus profesiones afines o auxiliares, incurrirá en falta disciplinaria, sancionable de acuerdo con las normas legales vigentes.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '34',
            'nombre' => 'ARTÍCULO 15. SANCIONES.', 
            'descripcion'=> ' El particular que viole las disposiciones de la presente ley incurrirá, sin perjuicio de las sanciones penales y de policía, en multa de dos (2) a cincuenta (50) salarios mínimos mensuales legales vigentes.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '35',
            'nombre' => 'ARTÍCULO 16. AVISO DEL EJERCICIO ILEGAL DE LA INGENIERÍA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, deberá dar aviso a todas las empresas relacionadas con la ingeniería o que utilicen los servicios de ingenieros, de la denuncia que se instaure contra cualquier persona por ejercer ilegalmente la ingeniería, utilizando todos los medios a su alcance para que se impida tal infracción, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '36',
            'nombre' => 'ARTÍCULO 17. RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS Y DE SUS REPRESENTANTES. ', 
            'descripcion'=> '',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '37',
            'nombre' => 'ARTÍCULO 18. DIRECCIÓN DE LABORES DE INGENIERÍA.', 
            'descripcion'=> 'Todo trabajo relacionado con el ejercicio de la Ingeniería, deberá ser dirigido por un ingeniero inscrito en el registro profesional de ingeniería y con tarjeta de matrícula profesional en la rama respectiva.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '38',
            'nombre' => 'ARTÍCULO 19. DICTÁMENES PERICIALES.', 
            'descripcion'=> 'El cargo o la función de perito, cuando el dictamen comprenda cuestiones técnicas de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, se encomendará al profesional cuya especialidad corresponda a la materia objeto del dictamen.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '39',
            'nombre' => 'ARTÍCULO 20. PROPUESTAS Y CONTRATOS.', 
            'descripcion'=> 'Las propuestas que se formulen en las licitaciones y concursos abiertos por entidades públicas del orden nacional, seccional o local, para la adjudicación de contratos cuyo objeto implique el desarrollo de las actividades catalogadas como ejercicio de la ingeniería, deberán estar avalados, en todo caso, cuando menos, por un ingeniero inscrito y con tarjeta de matrícula profesional en la respectiva rama de la ingeniería. En los contratos que se celebren como resultado de la licitación o del concurso, los contratistas tendrán la obligación de encomendar los estudios, la dirección técnica, la ejecución de los trabajos o la interventoría, a profesionales inscritos en el registro profesional de ingeniería, acreditados con la tarjeta de matrícula profesional o, excepcionalmente, con la constancia o certificado de su vigencia.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '40',
            'nombre' => 'ARTÍCULO 21. DENUNCIA DEL EJERCICIO ILEGAL DE LA INGENIERÍA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, denunciará y publicará por los medios a su alcance el ejercicio ilegal de la profesión de que tenga conocimiento, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '41',
            'nombre' => 'ARTÍCULO 22.', 
            'descripcion'=> 'En las construcciones, consultorías, estudios, proyectos, cálculos, diseños, instalaciones, montajes, interventorías, asesorías y demás trabajos relacionados con el ejercicio de las profesiones a las que se refiere la presente ley, la participación de los profesionales extranjeros no podrá ser superior a un veinte por ciento (20%) de su personal de ingenieros o profesionales auxiliares o afines colombianos, sin perjuicio de la aplicación de las normas laborales vigentes.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '42',
            'nombre' => 'ARTÍCULO 23. PERMISO TEMPORAL PARA EJERCER SIN MATRÍCULA A PERSONAS TITULADAS Y DOMICILIADAS EN EL EXTERIOR.', 
            'descripcion'=> 'Quien ostente el título académico de ingeniero o de profesión auxiliar o afín de las profesiones aquí reglamentadas, esté domiciliado en el exterior y pretenda vincularse bajo cualquier modalidad contractual para ejercer temporalmente la profesión en el territorio nacional, deberá obtener del Consejo Profesional Nacional de Ingeniería, Copnia, un permiso temporal para ejercer sin matrícula profesional, certificado de inscripción profesional o certificado de matrícula, según el caso; el cual tendrá validez por un (1) año y podrá ser renovado discrecionalmente por el Consejo Profesional Nacional de Ingeniería, Copnia, siempre, hasta por el plazo máximo del contrato o de la labor contratada, previa presentación de solicitud suficientemente motivada, por parte de la empresa contratante o por el profesional interesado o su representante; título o diploma debidamente consularizado o apostillado, según el caso; fotocopia del contrato que motiva su actividad en el país y el recibo de consignación de los derechos respectivos.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '43',
            'nombre' => 'ARTÍCULO 24. CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA', 
            'descripcion'=> 'En adelante el Consejo Profesional Nacional de Ingeniería y sus Profesiones Auxiliares, se denominará Consejo Profesional Nacional de Ingeniería y su sigla será "Copnia" y tendrá su sede principal en Bogotá, D.C.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '44',
            'nombre' => 'ARTÍCULO 25. RENTAS Y PATRIMONIO.', 
            'descripcion'=> 'Las rentas y el patrimonio del Copnia, estarán conformados por los recursos públicos que en actualidad posea, o que haya adquirido la Nación para su funcionamiento; por los recursos provenientes del cobro de certificados y constancias en ejercicio de sus funciones, cuyo valor será fijado de manera razonable de acuerdo con su determinación; por los recursos provenientes de los servicios a derechos de matrícula, tarjetas y permisos temporales. La t asa se distribuirá en forma equitativa entre los usuarios a partir de criterios relevantes que reconozcan los costos económicos requeridos, en las condiciones que fije el reglamento que adopte el Gobierno Nacional, derechos que no podrán exceder de la suma equivalente a un (1) salario mínimo mensual vigente.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '45',
            'nombre' => 'ARTÍCULO 26. FUNCIONES ESPECÍFICAS DEL CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA, COPNIA.', 
            'descripcion'=> 'El Consejo Profesional Nacional de Ingeniería, Copnia, tendrá como funciones específicas las siguientes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '46',
            'nombre' => 'ARTÍCULO 27. CREACIÓN DE LOS CONSEJOS SECCIONALES Y REGIONALES.(INEXEQUIBLE)', 
            'descripcion'=> 'Facúltase al Consejo Profesional Nacional de Ingeniería, Copnia, para que con el voto de la mayoría de los miembros de su Junta de Consejeros y mediante resolución motivada, suprima, fusione o cree sus respectivos Consejos Seccionales o regionales cuando lo estime conveniente, los cuales podrán no coincidir con la organización territorial de la República.',
            'idcapitulo' => '01'),  
        array(
            'idarticulo' => '47',
            'nombre' => 'ARTÍCULO 28. INTEGRACIÓN DE LA JUNTA DE CONSEJEROS REGIONAL O SECCIONAL.', 
            'descripcion'=> 'El Gobernador del departamento en el cual funcione el Consejo Regional o Seccional, quien lo presidirá; pudiendo delegar, exclusivamente, en el Secretario de Obras Públicas del departamento o quien haga sus veces.
            .El Secretario de Educación del departamento sede o su delegado.
            El Secretario de Planeación del departamento sede o quien haga sus veces, o su delegado.
            El Rector o el Decano de ingeniería de una de las universidades o instituciones de Educación Superior del departamento sede, que otorguen título de ingeniero, o de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una.
            El Presidente de una de las agremiaciones regionales de ingeniería, de sus profesiones afines o de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una en el departamento sede.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '48',
            'nombre' => 'ARTÍCULO 29. POSTULADOS ÉTICOS DEL EJERCICIO PROFESIONAL.', 
            'descripcion'=> ' El ejercicio profesional de la Ingeniería en todas sus ramas, de sus profesiones afines y sus respectivas profesiones auxiliares, debe ser guiado por criterios, conceptos y elevados fines, que propendan a enaltecerlo; por lo tanto deberá estar ajustado a las disposiciones de las siguientes normas que constituyen su Código de Ética Profesional.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '49',
            'nombre' => 'ARTÍCULO 30.', 
            'descripcion'=> 'Los ingenieros, sus profesionales afines y sus profesionales auxiliares, para todos los efectos del Código de Ética Profesional y su Régimen Disciplinario contemplados en esta ley, se denominarán "Los profesionales".',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '50',
            'nombre' => 'ARTÍCULO 31. DEBERES GENERALES DE LOS PROFESIONALES.', 
            'descripcion'=> 'Son deberes generales de los profesionales los siguientes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '51',
            'nombre' => 'ARTÍCULO 32. PROHIBICIONES GENERALES A LOS PROFESIONALES.', 
            'descripcion'=> 'Son prohibiciones generales a los profesionales:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '52',
            'nombre' => 'ARTÍCULO 33. DEBERES ESPECIALES DE LOS PROFESIONALES PARA CON LA SOCIEDAD. ', 
            'descripcion'=> 'Son deberes especiales de los profesionales para con la sociedad:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '53',
            'nombre' => 'ARTÍCULO 34. PROHIBICIONES ESPECIALES A LOS PROFESIONALES RESPECTO DE LA SOCIEDAD. ', 
            'descripcion'=> 'Son prohibiciones especiales a los profesionales respecto de la sociedad:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '54',
            'nombre' => 'ARTÍCULO 35. DEBERES DE LOS PROFESIONALES PARA CON LA DIGNIDAD DE SUS PROFESIONES.', 
            'descripcion'=> 'Son deberes de los profesionales de quienes trata este Código para con la dignidad de sus profesiones:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '55',
            'nombre' => 'ARTÍCULO 36. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE LA DIGNIDAD DE SUS PROFESIONES. ', 
            'descripcion'=> 'Son prohibiciones a los profesionales respecto de la dignidad de sus profesiones:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '56',
            'nombre' => 'ARTÍCULO 37. DEBERES DE LOS PROFESIONALES PARA CON SUS COLEGAS Y DEMÁS PROFESIONALES.', 
            'descripcion'=> 'Son deberes de los profesionales para con sus colegas y demás profesionales de la ingeniería:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '57',
            'nombre' => 'ARTÍCULO 38. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS COLEGAS Y DEMÁS PROFESIONALES.', 
            'descripcion'=> ' Son prohibiciones a los profesionales, respecto de sus colegas y demás profesionales de la ingeniería:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '58',
            'nombre' => 'ARTÍCULO 39. DEBERES DE LOS PROFESIONALES PARA CON SUS CLIENTES Y EL PÚBLICO EN GENERAL.', 
            'descripcion'=> 'Son deberes de los profesionales para con sus clientes y el público en general:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '59',
            'nombre' => 'ARTÍCULO 40. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS CLIENTES Y EL PÚBLICO EN GENERAL.', 
            'descripcion'=> 'Son prohibiciones a los profesionales respecto de sus clientes y el público en general:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '60',
            'nombre' => 'ARTÍCULO 41. DEBERES DE LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS.', 
            'descripcion'=> 'Son deberes de los profesionales que se desempeñen en funciones públicas o privadas, los siguientes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '61',
            'nombre' => 'ARTÍCULO 42. PROHIBICIONES A LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS.', 
            'descripcion'=> 'Son prohibiciones a los profesionales que se desempeñen en funciones públicas o privadas, las siguientes:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '62',
            'nombre' => 'ARTÍCULO 43. DEBERES DE LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES.', 
            'descripcion'=> 'Son deberes de los profesionales en los concursos o licitaciones:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '63',
            'nombre' => 'ARTÍCULO 44. DE LAS PROHIBICIONES A LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES.', 
            'descripcion'=> 'Son prohibiciones de los profesionales en los concursos o licitaciones:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '64',
            'nombre' => 'ARTÍCULO 45. RÉGIMEN DE INHABILIDADES E INCOMPATIBILIDADES QUE AFECTAN EL EJERCICIO.', 
            'descripcion'=> 'Incurrirán en faltas al régimen de inhabilidades e incompatibilidades y por lo tanto se les podrán imponer las sanciones a que se refiere la presente ley:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '65',
            'nombre' => 'ARTÍCULO 46. DEFINICIÓN DE FALTA DISCIPLINARIA.', 
            'descripcion'=> 'Se entiende como falta que promueva la acción disciplinaria y en consecuencia, la aplicación del procedimiento aquí establecido, toda violación a las prohibiciones y al régimen de inhabilidades e incompatibilidades, al correcto ejercicio de la profesión o al cumplimiento de las obligaciones impuestas por el Código de Ética Profesional adoptado en virtud de la presente ley.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '66',
            'nombre' => 'ARTÍCULO 47. SANCIONES APLICABLES.', 
            'descripcion'=> 'Los Consejos Seccionales o Regionales de Ingeniería podrán sancionar a los profesionales responsables de la comisión de faltas disciplinarias, con:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '67',
            'nombre' => 'ARTÍCULO 48. ESCALA DE SANCIONES.', 
            'descripcion'=> 'Los profesionales de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, a quienes se les compruebe la violación de normas del Código de Ética Profesional adoptado en la presente ley, estarán sometidos a las siguientes sanciones por parte del Consejo Profesional de Ingeniería respectivo:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '68',
            'nombre' => 'ARTÍCULO 49. FALTAS SUSCEPTIBLES DE SANCIÓN DISCIPLINARIA.', 
            'descripcion'=> 'Será susceptible de sanción disciplinaria todo acto u omisión del profesional, intencional o culposo, que implique violación de las prohibiciones; incumplimiento de las obligaciones; ejecución de actividades incompatibles con el decoro que exige el ejercicio de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares; el ejercicio de actividades delictuosas relacionadas con el ejercicio de la profesión o el incumplimiento de alguno de los deberes que la profesión o las normas que la rigen le imponen.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '69',
            'nombre' => 'ARTÍCULO 50. ELEMENTOS DE LA FALTA DISCIPLINARIA.', 
            'descripcion'=> 'La configuración de la falta disciplinaria deberá estar enmarcada dentro de los siguientes elementos o condiciones:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '70',
            'nombre' => 'ARTÍCULO 51. PREVALENCIA DE LOS PRINCIPIOS RECTORES.', 
            'descripcion'=> 'En la interpretación y aplicación del régimen disciplinario establecido prevalecerán, en su orden, los principios rectores que determina la Constitución Política, este código y el Código Contencioso Administrativo.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '71',
            'nombre' => 'ARTÍCULO 52. CRITERIOS PARA DETERMINAR LA GRAVEDAD O LEVEDAD DE LA FALTA DISCIPLINARIA.', 
            'descripcion'=> 'El Consejo Profesional Seccional o Regional correspondiente de Ingeniería determinará si la falta es leve, grave o gravísima, de conformidad con los siguientes criterios:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '72',
            'nombre' => 'ARTÍCULO 53. FALTAS CALIFICADAS COMO GRAVÍSIMAS', 
            'descripcion'=> ' Se consideran gravísimas y se constituyen en causal de cancelación de la matrícula profesional, sin requerir la calificación que de ellas haga el Consejo respectivo, las siguientes faltas:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '73',
            'nombre' => 'ARTÍCULO 54. CONCURSO DE FALTAS DISCIPLINARIAS.', 
            'descripcion'=> 'El profesional que con una o varias acciones u omisiones infrinja varias disposiciones del Código de Ética Profesional o varias veces la misma disposición, quedará sometido a la que establezca la sanción más grave o, en su defecto, a una de mayor entidad.',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '74',
            'nombre' => 'ARTÍCULO 55. CIRCUNSTANCIAS QUE JUSTIFICAN LA FALTA DISCIPLINARIA. ', 
            'descripcion'=> 'La conducta se justifica cuando se comete:',
            'idcapitulo' => '01'),
        array(
            'idarticulo' => '75',
            'nombre' => 'ARTÍCULO 56. ACCESO AL EXPEDIENTE.', 
            'descripcion'=> ' El investigado tendrá acceso a la queja y demás partes del expediente disciplinario, solo a partir del momento en que sea escuchado en versión libre y espontánea o desde la notificación de cargos, según el caso.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '76',
            'nombre' => 'ARTÍCULO 57. PRINCIPIO DE IMPARCIALIDAD.', 
            'descripcion'=> 'El Consejo Profesional de Ingeniería respectivo, directamente o a través de sus Consejos Seccionales o Regionales, deberá investigar y evaluar, tanto los hechos y circunstancias desfavorables, como los favorables a los intereses del disciplinado.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '77',
            'nombre' => 'ARTÍCULO 58. DIRECCIÓN DE LA FUNCIÓN DISCIPLINARIA.', 
            'descripcion'=> 'Corresponde al Presidente del Consejo Profesional de Ingeniería respectivo, la dirección de la función disciplinaria, sin perjuicio del impedimento de intervenir o tener injerencia en la investigación, en razón de tener que conocer en segunda instancia por vía de apelación o de consulta.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '78',
            'nombre' => 'ARTÍCULO 59. PRINCIPIO DE PUBLICIDAD.', 
            'descripcion'=> ' El Consejo Profesional de Ingeniería respectivo respetará y aplicará el principio de publicidad dentro de las investigaciones disciplinarias; no obstante, ni el quejoso, ni terceros interesados se constituirán en partes dentro de estas.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '79',
            'nombre' => 'ARTÍCULO 60. INICIACIÓN DEL PROCESO DISCIPLINARIO.', 
            'descripcion'=> 'El proceso disciplinario de que trata el presente título se iniciará por queja interpuesta por cualquier persona natural o jurídica, la cual deberá formularse por escrito ante el Consejo Seccional o Regional del Consejo Profesional de Ingeniería respectivo, correspondiente a la jurisdicción territorial del lugar en que se haya cometido el último acto constitutivo de la falta o en defecto de este, ante el Consejo Seccional o Regional geográficamente más cercano.',
            'idcapitulo' => '01',
            'idparagrafo' =>  '519'),
        array(
            'idarticulo' => '80',
            'nombre' => 'ARTÍCULO 61. RATIFICACIÓN DE LA QUEJA.', 
            'descripcion'=> ' Recibida la queja por el Consejo Seccional o Regional, a través de la Secretaría procederá a ordenarse la ratificación bajo juramento de la queja y mediante auto, ordenará la investigación preliminar, con el fin de establecer si hay o no mérito para abrir investigación formal disciplinaria contra el presunto o presuntos infractores. Del auto a que se refiere el presente artículo se dará aviso escrito al Consejo Profesional Nacional correspondiente.',
            'idcapitulo' => '01',
            'idparagrafo' =>  '521'),
        array(
            'idarticulo' => '81',
            'nombre' => 'ARTÍCULO 62. TRASLADO DE COMPETENCIA', 
            'descripcion'=> ' Cuando existan razones para que se considere que se pueda entorpecer un proceso en determinado Consejo Seccional, el Consejo Nacional, podrá comisionar a otro Consejo Seccional, diferente del competente por jurisdicción territorial, el desarrollo del proceso disciplinario, para garantizar el cumplimento de todos los principios que lo rigen.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '82',
            'nombre' => 'ARTÍCULO 63. INVESTIGACIÓN PRELIMINAR.', 
            'descripcion'=> 'La investigación preliminar será adelantada por la respectiva Secretaría Seccional y no podrá excederse de sesenta (60) días, contados a partir de la fecha del auto que ordena la apertura de la investigación preliminar, durante los cuales se decretarán y practicarán las pruebas que el investigador considere pertinentes y que conduzcan a la comprobación de los hechos; las cuales podrán ser, entre otras, testimoniales, documentales, periciales, etc.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '83',
            'nombre' => 'ARTÍCULO 64. FINES DE LA INDAGACIÓN PRELIMINAR.', 
            'descripcion'=> 'La indagación preliminar tendrá como fines verificar la ocurrencia de la conducta, determinar si es constitutiva de falta disciplinaria e identificar o individualizar al profesional que presuntamente intervino en ella.',
            'idcapitulo' => '01',
            'idparagrafo' =>  '522'),
        array(
            'idarticulo' => '84',
            'nombre' => 'ARTÍCULO 65. INFORME Y CALIFICACIÓN DEL MÉRITO DE LA INVESTIGACIÓN PRELIMINAR.', 
            'descripcion'=> 'Terminada la etapa de investigación preliminar, la Secretaría Seccional o Regional procederá dentro de los diez (10) días hábiles siguientes, a rendir un informe al Presidente Seccional, para que este, dentro de los quince (15) días hábiles siguientes a su recibo, califique lo actuado mediante auto motivado, en el que se determinará si hay o no mérito para adelantar investigación formal disciplinaria contra el profesional disciplinado y en caso afirmativo, se le formulará con el mismo auto, el correspondiente pliego de cargos. Si no se encontrare mérito para seguir la actuación, el Presidente Seccional ordenará en la misma providencia el archivo del expediente, informando sucintamente la determinación a la Junta de Consejeros Seccional o Regional en la siguiente sesión ordinaria, para que quede consignado en el acta respectiva, comunicando la decisión adoptada al quejoso, a los profesionales involucrados y al Consejo Profesional Nacional respectivo.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '84',
            'nombre' => 'ARTÍCULO 66. NOTIFICACIÓN PLIEGO DE CARGOS.', 
            'descripcion'=> ' La Secretaría Regional o Seccional, notificará personalmente el pliego de cargos al profesional inculpado. No obstante, de no poder efectuarse la notificación personal, se hará por edicto en los términos establecidos en el Código Contencioso Administrativo. Si transcurrido el término de la notificación por edicto, el inculpado no compareciere, se proveerá el nombramiento de un apoderado de oficio, de la lista de abogados inscritos ante el Consejo Seccional de la Judicatura correspondiente, con quien se continuará la actuación; designación que conllevará al abogado, las implicaciones y responsabilidades que la ley determina.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '86',
            'nombre' => 'ARTÍCULO 67. TRASLADO DEL PLIEGO DE CARGOS.', 
            'descripcion'=> ' Surtida la notificación, se dará traslado al profesional inculpado por el término improrrogable de diez (10) días hábiles, para presentar descargos, solicitar y aportar pruebas. Para tal efecto, el expediente permanecerá a su disposición en la Secretaría de la Seccional o Regional respectiva.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '87',
            'nombre' => 'ARTÍCULO 68. ETAPA PROBATORIA.', 
            'descripcion'=> ' Vencido el término de traslado, la Secretaría Seccional, decretará las pruebas solicitadas por el investigado y las demás que de oficio considere conducentes y pertinentes, mediante auto contra el cual no procede recurso alguno y el cual deberá ser comunicado al profesional disciplinado. El término probatorio será de sesenta (60) días.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '88',
            'nombre' => 'ARTÍCULO 69. FALLO DE PRIMERA INSTANCIA.', 
            'descripcion'=> 'Vencido el término probatorio previsto, el Presidente Regional o Seccional, elaborará un proyecto de decisión, que se someterá a la consideración de la Junta de Consejeros Regionales o Seccionales, la cual podrá aceptarlo, aclararlo, modificarlo o revocarlo. Si la mayoría de los miembros asistentes a la sesión aprueban el proyecto de decisión, se adoptará la decisión propuesta mediante resolución motivada.',
            'idcapitulo' => '01',
            'idparagrafo' =>  '523'),
        array(
            'idarticulo' => '89',
            'nombre' => 'ARTÍCULO 70. NOTIFICACIÓN DEL FALLO', 
            'descripcion'=> ' La decisión adoptada por el Consejo Profesional Seccional, se notificará personalmente al interesado, por intermedio de la Secretaría Seccional, dentro de los diez (10) días siguientes a la fecha de la sesión en que se adoptó y si no fuere posible, se realizará por edicto, en los términos del artículo 45 del Código Contencioso Administrativo.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '90',
            'nombre' => 'ARTÍCULO 71. RECURSO DE APELACIÓN.', 
            'descripcion'=> ' Contra dicha providencia solo procede el recurso de apelación ante el Consejo Profesional Nacional de Ingeniería respectivo, dentro de los cinco (5) días siguientes a la fecha de la notificación personal o de la desfijación del edicto recurso que deberá presentarse ante el Consejo Regional o Seccional por escrito y con el lleno de los requisitos que exige el Código Contencioso Administrativo.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '91',
            'nombre' => 'ARTÍCULO 72. AGOTAMIENTO DE LA VÍA GUBERNATIVA.', 
            'descripcion'=> ' El Consejo Profesional Nacional resolverá el recurso interpuesto, mediante resolución motivada; determinación que será definitiva y contra la cual no procederá recurso alguno por vía gubernativa.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '92',
            'nombre' => 'ARTÍCULO 73. CONFIRMACIÓN.', 
            'descripcion'=> 'En todo caso, el acto administrativo mediante el cual se dé por terminada la actuación de un Consejo Seccional dentro de un proceso disciplinario, deberá ser confirmado, modificado o revocado, según el caso, por el Consejo Profesional Nacional de Ingeniería correspondiente, por vía de apelación o de consulta.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '93',
            'nombre' => 'ARTÍCULO 74. CÓMPUTO DE LA SANCIÓN.', 
            'descripcion'=> ' Las sanciones impuestas por violaciones al presente régimen disciplinario, empezarán a computarse a partir de la fecha de la comunicación personal o de la entrega por correo certificado, que se haga al profesional sancionado de la decisión del Consejo Profesional Nacional correspondiente, sobre la apelación o la consulta.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '94',
            'nombre' => 'ARTÍCULO 75. AVISO DE LA SANCIÓN.', 
            'descripcion'=> ' De toda sanción disciplinaria impuesta a un profesional, a través de la Secretaría del Consejo Seccional respectivo, se dará aviso a la Procuraduría General de la Nación, a todas las entidades que tengan que ver con el ejercicio profesional correspondiente, con el registro de proponentes y contratistas y a las agremiaciones de profesionales, con el fin de que se impida el ejercicio de la profesión por parte del sancionado, debiendo estas, ordenar las anotaciones en sus registros y tomar las medidas pertinentes, con el fin de hacer efectiva la sanción. La anotación tendrá vigencia y solo surtirá efectos por el término de la misma.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '94',
            'nombre' => 'ARTÍCULO 76. CADUCIDAD DE LA ACCIÓN.', 
            'descripcion'=> 'La acción disciplinaria a que se refiere el presente título caduca en cinco (5) años contados a partir de la fecha en que se cometió el último acto constitutivo de la falta. El auto que ordena la apertura de la investigación preliminar, interrumpe el término de caducidad. El proceso prescribirá tres años después de la fecha de expedición de dicho auto.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '94',
            'nombre' => 'ARTÍCULO 77. RÉGIMEN TRANSITORIO.', 
            'descripcion'=> ' Todas las actuaciones que se adelanten por parte de los Consejos Profesionales de Ingeniería y sus respectivos Consejos Seccionales o Regionales, de acuerdo con los procedimientos vigentes en el momento en que comience a regir la presente ley, seguirán rigiéndose por estos hasta su culminación.',
            'idcapitulo' => '01',
            ),
        array(
            'idarticulo' => '94',
            'nombre' => 'ARTÍCULO 78. VIGENCIA.', 
            'descripcion'=> 'La presente ley rige a partir de la fecha de su publicación en el Diario Oficial y deroga todas las disposiciones que le sean contrarias, en especial la Ley 20 de 1971, la Ley 14 de 1975, la Ley 64 de 1978, la Ley 28 de 1989, la Ley 33 de 1989, Ley 392 de 1997 y sus normas reglamentarias.',
            'idcapitulo' => '01')          
    );


     /**
     * Seed the application's database.
     *
     * @return void
     */
    
    
     public function run()
    {
     

        //self::seedUser();
        //$this->command->info('Tabla usuarios inicializada con datos!');

        //self::seedLeyes();
        //$this->command->info('Tabla leyes inicializada con datos!');

        //self::seedTitulos();
        //$this->command->info('Tabla titulos inicializada con datos!');

        //self::seedCapitulos();
        //$this->command->info('Tabla capitulos inicializada con datos!');

        self::seedArticulos();
        $this->command->info('Tabla articulos inicializada con datos!');

        //self::seedItems();
        //$this->command->info('Tabla items inicializada con datos!');

        //self::seedParagrafos();
        //$this->command->info('Tabla paragrafos inicializada con datos!');

        //self::seedNotas();
        //$this->command->info('Tabla notas inicializada con datos!');

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
            $p = new leyes;
            $p->idLey = $leyes['idley'];
            $p->Ley = $leyes['ley'];
            $p->imagen = $leyes['imagen'];
            $p->descripcion = $leyes['desc'];
            $p->save();
      }


    }

    private function seedTitulos(){
        DB::table('titulos')->delete();
        foreach( $this->titulos as $titulo) {
            $p = new Titulo;
            $p->idTitulo = $titulo['idtitulo'];
            $p->titulo = $titulo['nombre'];
            $p->descripcion = $titulo['descripcion'];
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
            $p->descripcion = $capitulo['descripcion'];
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
            $p->descripcion = $articulo['descripcion'];
            $p->idCapitulo = $articulo['idcapitulo'];
            $p->save();
        } 
    }

    private function seedItems(){}

    private function seedParagrafos(){}

    private function seedNotas(){}

}
