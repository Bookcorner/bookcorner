<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Bbdd extends CI_Controller {
    public function createInitialData() {
        $this->deletePreviousData ();
        $this->setDebugMode ( false );
        
        // Create database user
        $user1 = R::Dispense ( 'user' );
        $user1->user_name = 'sr.admin';
        $user1->user_surname = 'nistrate';
        $user1->user_nickname = 'admin';
        $user1->user_pwd = encrypt( 'theboss' );
        $user1->user_validation = 'GOD';
        $user1->user_email = 'administrator@gmail.com';
        $user1->user_avatar = 'boss.jpg';
        $user1->user_genre = 'M';
        
        $user2 = R::Dispense ( 'user' );
        $user2->user_name = 'mr.comando';
        $user2->user_surname = 'alfa';
        $user2->user_nickname = 'moderator';
        $user2->user_pwd = encrypt( 'thesecretary' );
        $user2->user_validation = 'zbn1OEyPdt65ABoIhgcSvVZF';
        $user2->user_email = 'comando@gmail.com';
        $user2->user_avatar = 'secretary.jpeg';
        $user2->user_genre = 'M';
        
        $user3 = R::Dispense ( 'user' );
        $user3->user_name = 'justin';
        $user3->user_surname = 'robbeen';
        $user3->user_nickname = 'registrate';
        $user3->user_pwd = encrypt( 'justinme' );
        $user3->user_validation = '2JFR97xzncleYypSBqhQTrui';
        $user3->user_email = 'justinbieber@gmail.com';
        $user3->user_avatar = 'justin.jpg';
        $user3->user_genre = 'M';
        
        $user4 = R::Dispense ( 'user' );
        $user4->user_name = 'Mario';
        $user4->user_surname = 'Cantelar';
        $user4->user_nickname = 'Marcant94';
        $user4->user_pwd = encrypt( '1234' );
        $user4->user_validation = 'GOD';
        $user4->user_email = 'mcantelar@gmail.com';
        $user4->user_avatar = 'mario.jpg';
        $user4->user_genre = 'M';
        
        $user5 = R::Dispense ( 'user' );
        $user5->user_name = 'Juan Antonio';
        $user5->user_surname = 'Ortiz';
        $user5->user_nickname = 'Juanana';
        $user5->user_pwd = encrypt( '4321' );
        $user5->user_validation = 'GOD';
        $user5->user_email = 'juananortizc@gmail.com';
        $user5->user_avatar = 'juanan.png';
        $user5->user_genre = 'M';
        
        $user6 = R::Dispense ( 'user' );
        $user6->user_name = 'Rubén';
        $user6->user_surname = 'Cortés';
        $user6->user_nickname = 'rcortes';
        $user6->user_pwd = encrypt( 'asdf' );
        $user6->user_validation = 'GOD';
        $user6->user_email = 'rubencortesmunuera@gmail.com';
        $user6->user_avatar = 'ruben.jpg';
        $user6->user_genre = 'M';
        
        // Create database user roles available
        $user_role1 = R::Dispense ( 'userrole' );
        $user_role1->userrole_name = 'Registered';
        $user_role1->userrole_desc = 'Normal registered user';
        
        $user_role2 = R::Dispense ( 'userrole' );
        $user_role2->userrole_name = 'Moderator';
        $user_role2->userrole_desc = 'Registered user with aditional options';
        
        $user_role3 = R::Dispense ( 'userrole' );
        $user_role3->userrole_name = 'Administrator';
        $user_role3->userrole_desc = 'Application boss';
        
        // Create user states
        $user_state1 = R::Dispense ( 'userstatus' );
        $user_state1->userstate_name = 'Active';
        
        $user_state2 = R::Dispense ( 'userstatus' );
        $user_state2->userstate_name = 'Inactive';
        
        $user_state3 = R::Dispense ( 'userstatus' );
        $user_state3->userstate_name = 'Banned';
        
        // Create listbook
        $listbook1 = R::Dispense ( 'listbook' );
        $listbook1->listbook_name = 'Lista de admin';
        
        $listbook2 = R::Dispense ( 'listbook' );
        $listbook2->listbook_name = 'Lista de moderator';
        
        $listbook3 = R::Dispense ( 'listbook' );
        $listbook3->listbook_name = 'Lista de registrate';
        
        $listbook4 = R::Dispense ( 'listbook' );
        $listbook4->listbook_name = 'Lista de Marcant94';
        
        $listbook5 = R::Dispense ( 'listbook' );
        $listbook5->listbook_name = 'Lista de Juanana';
        
        $listbook6 = R::Dispense ( 'listbook' );
        $listbook6->listbook_name = 'Lista de rcortes';
        
        // Create Validation
        $valuation1 = R::Dispense ( 'valuation' );
        $valuation1->val_puntuacion = 1;
        $valuation1->val_nota_libro = 'Págino 250.';
        $valuation1->val_estado_libro = 1;
        
        $valuation2 = R::Dispense ( 'valuation' );
        $valuation2->val_puntuacion = 10;
        $valuation2->val_nota_libro = 'Este es el siguiente seguro';
        $valuation2->val_estado_libro = 2;
        
        $valuation3 = R::Dispense ( 'valuation' );
        $valuation3->val_puntuacion = 5;
        $valuation3->val_nota_libro = 'No me gustó mucho';
        $valuation3->val_estado_libro = 4;
        
        $valuation3 = R::Dispense ( 'valuation' );
        $valuation3->val_puntuacion = 5;
        $valuation3->val_nota_libro = 'No me gustó mucho';
        $valuation3->val_estado_libro = 2;
        
        $valuation4 = R::Dispense ( 'valuation' );
        $valuation4->val_puntuacion = 0;
        $valuation4->val_nota_libro = 'Introduce una nota';
        $valuation4->val_estado_libro = 3;
        
        $valuation5 = R::Dispense ( 'valuation' );
        $valuation5->val_puntuacion = 0;
        $valuation5->val_nota_libro = 'Introduce una nota';
        $valuation5->val_estado_libro = 4;
        
        $valuation6 = R::Dispense ( 'valuation' );
        $valuation6->val_puntuacion = 0;
        $valuation6->val_nota_libro = 'Introduce una nota';
        $valuation6->val_estado_libro = 1;
        
        $valuation7 = R::Dispense ( 'valuation' );
        $valuation7->val_puntuacion = 0;
        $valuation7->val_nota_libro = 'Introduce una nota';
        $valuation7->val_estado_libro = 1;
        
        $valuation8 = R::Dispense ( 'valuation' );
        $valuation8->val_puntuacion = 0;
        $valuation8->val_nota_libro = 'Introduce una nota';
        $valuation8->val_estado_libro = 2;
        
        $valuation9 = R::Dispense ( 'valuation' );
        $valuation9->val_puntuacion = 0;
        $valuation9->val_nota_libro = 'Introduce una nota';
        $valuation9->val_estado_libro = 4;
        
        $valuation10 = R::Dispense ( 'valuation' );
        $valuation10->val_puntuacion = 0;
        $valuation10->val_nota_libro = 'Introduce una nota';
        $valuation10->val_estado_libro = 3;
        
        $valuation11 = R::Dispense ( 'valuation' );
        $valuation11->val_puntuacion = 0;
        $valuation11->val_nota_libro = 'Introduce una nota';
        $valuation11->val_estado_libro = 1;
        
        $valuation12 = R::Dispense ( 'valuation' );
        $valuation12->val_puntuacion = 0;
        $valuation12->val_nota_libro = 'Introduce una nota';
        $valuation12->val_estado_libro = 2;
        
        $valuation13 = R::Dispense ( 'valuation' );
        $valuation13->val_puntuacion = 0;
        $valuation13->val_nota_libro = 'Introduce una nota';
        $valuation13->val_estado_libro = 3;
        
        $valuation14 = R::Dispense ( 'valuation' );
        $valuation14->val_puntuacion = 0;
        $valuation14->val_nota_libro = 'Introduce una nota';
        $valuation14->val_estado_libro = 4;
        
        $valuation15 = R::Dispense ( 'valuation' );
        $valuation15->val_puntuacion = 0;
        $valuation15->val_nota_libro = 'Introduce una nota';
        $valuation15->val_estado_libro = 2;
        
        $valuation16 = R::Dispense ( 'valuation' );
        $valuation16->val_puntuacion = 0;
        $valuation16->val_nota_libro = 'Introduce una nota';
        $valuation16->val_estado_libro = 1;
        
        $valuation17 = R::Dispense ( 'valuation' );
        $valuation17->val_puntuacion = 0;
        $valuation17->val_nota_libro = 'Introduce una nota';
        $valuation17->val_estado_libro = 3;
        
        $valuation18 = R::Dispense ( 'valuation' );
        $valuation18->val_puntuacion = 0;
        $valuation18->val_nota_libro = 'Introduce una nota';
        $valuation18->val_estado_libro = 1;
        
        $valuation19 = R::Dispense ( 'valuation' );
        $valuation19->val_puntuacion = 0;
        $valuation19->val_nota_libro = 'Introduce una nota';
        $valuation19->val_estado_libro = 1;
        
        $valuation20 = R::Dispense ( 'valuation' );
        $valuation20->val_puntuacion = 0;
        $valuation20->val_nota_libro = 'Introduce una nota';
        $valuation20->val_estado_libro = 3;
        
        // Create book
        $book1 = R::Dispense ( 'book' );
        $book1->book_isbn = '8401337208';
        $book1->book_name = 'El Nombre del Viento';
        $book1->book_desc = 'Viajé, amé, perdí, confié y me traicionaron. En una posada en tierra de nadie, un hombre se dispone a relatar, por primera vez, la auténtica historia de su vida. Una historia que únicamente él conoce y que ha quedado diluida tras los rumores, las conjeturas y los cuentos de taberna que le han convertido en un personaje legendario a quien todos daban ya por muerto: Kvothe... músico, mendigo, ladrón, estudiante, mago, héroe y asesino. Ahora va a revelar la verdad sobre sí mismo. Y para ello debe empezar por el principio: su infancia en una troupe de artistas itinerantes, los años malviviendo como un ladronzuelo en las calles de una gran ciudad y su llegada a una universidad donde esperaba encontrar todas las respuestas que había estado buscando.';
        $book1->book_img = 'endv.jpg';
        
        $book2 = R::Dispense ( 'book' );
        $book2->book_isbn = '9788483462034';
        $book2->book_name = 'La Casa de los Espíritus';
        $book2->book_desc = 'Primera novela de Isabel Allende que nos narra la historia de un poderosa familia de terratenientes latinoamericanos. El depósito patriarca Esteban Trueba ha construido con mano de hierro un imperio privado que empieza a tambalearse a raíz del paso del tiempo y de un entorno social explosivo. Finalmente, la decadencia perso nal de patriarca arrastrará a los Trueba a una dolorosa desintegración. Atrapados en unas dramáticas relaciones familiares, los personajes de esta portentosa novela encarnan las tensiones sociales y espirituales de una época que abarca gran parte de este siglo. Con ternura e impecable factura literaria, Isabel Allende perfila el destino de sus personajes como parte indisoluble del destino colectivo de América Latina, marcado por el mestizaje, las injusticias sociales y la búsqueda de la propia identidad.';
        $book2->book_img = 'lacasadelosespiritus.png';
        
        $book3 = R::Dispense ( 'book' );
        $book3->book_isbn = '9788401339639';
        $book3->book_name = 'El Temor de un Hombre Sabio';
        $book3->book_desc = "El temor de un hombre sabio. Crónica del asesino de reyes: segundo día (título original: The Wise Man's Fear. The Kingkiller Chronicle: Day Two) es la continuación de El nombre del viento y pertenece a la serie Crónica del asesino de reyes. Es la segunda novela del escritor estadounidense y profesor adjunto de lengua y literatura inglesa en la universidad de Wisconsin1 Patrick Rothfuss. El libro, cuya primera edición data de 2011, ya cuenta con la vista buena de críticos de todo el mundo y su libro precedente ganó el Premio Pluma al mejor libro de literatura fantástica permitiendo a su autor a dedicarse exclusivamente a la escritura.";
        $book3->book_img = 'etdus.jpg';
        
        $book4 = R::Dispense ( 'book' );
        $book4->book_isbn = '978-0-671-47748-6';
        $book4->book_name = 'El médico';
        $book4->book_desc = "La novela trata sobre la vida Rob J. Cole, que en sus inicios fue un niño hijo de una familia del gremio de carpinteros de Londres. A los nueve años se queda huérfano. La muerte de sus padres le descubre «su don», ya que es capaz de percibir si alguien está próximo a la muerte sólo con tocarlo. Durante unos días se encarga del cuidado de sus cuatro hermanos, a quienes el jefe del gremio va encontrando nuevos hogares poco a poco. Cuando se queda solo, bajo el peligro de ser vendido como esclavo, fortuitamente pasará a ser el ayudante-aprendiz de Henry Croft (Barber), un hombre campechano que recorre Inglaterra montando espectáculos de malabarismo para atraer al público a su negocio de cirujano-barbero, donde realiza pequeñas curas y vende un brebaje curalotodo: la «Panacea Universal».";
        $book4->book_img = 'elmedico.jpeg';
        
        $book5 = R::Dispense ( 'book' );
        $book5->book_isbn = '85-7665-185-8';
        $book5->book_name = 'El Alquimista';
        $book5->book_desc = "En Andalucía, un joven pastor pasea por las llanuras contemplando la naturaleza. El joven Santiago tiene un sueño repetido mientras descansa con sus ovejas en un pasto andaluz, por lo que decide acudir a una gitana para que le interprete el sueño. Después de quedar descontento con la respuesta que recibe, se sienta en un banco de la plaza a leer un libro y conoce a un anciano que dice ser el rey de Salem. Tras tener una conversación con él, en la que le deja claro que es alguien muy especial, Santiago decide emprender un viaje por el norte de África en busca de un tesoro. En su camino conocerá a un sinfín de personas que, cómo él, buscan su propia Leyenda Personal.";
        $book5->book_img = 'elalquimista.jpeg';
        
        
        // Create genrebook
        $genrebook1 = R::Dispense ( 'genrebook' );
        $genrebook1->genrebook_name = 'Novela';
        
        $genrebook2 = R::Dispense ( 'genrebook' );
        $genrebook2->genrebook_name = 'Narrativa';
        
        $genrebook3 = R::Dispense ( 'genrebook' );
        $genrebook3->genrebook_name = 'Fantasía Heroíca';
        
        $genrebook4 = R::Dispense ( 'genrebook' );
        $genrebook4->genrebook_name = 'Fantasía';
        
        $genrebook5 = R::Dispense ( 'genrebook' );
        $genrebook5->genrebook_name = 'Alta Fantasía';
        
        // Create bookstate
        $bookstate1 = R::Dispense ( 'bookstate' );
        $bookstate1->bookstate_name = 'Available';
        
        $bookstate2 = R::Dispense ( 'bookstate' );
        $bookstate2->bookstate_name = 'Pending';
        
        $bookstate3 = R::Dispense ( 'bookstate' );
        $bookstate3->bookstate_name = 'Not Available';
        
        // Create author
        $author1 = R::Dispense ( 'author' );
        $author1->author_fullname = 'Patrick Rothfuss';
        $author1->author_desc = 'Patrick James Rothfuss (nacido  el 6 de junio de 1973) es un escritor estadounidense de fantasía y profesor adjunto de literatura y filología inglesa en la Universidad de Wisconsin. Es el autor de la serie Crónica del asesino de reyes, que fue rechazada por varias editoriales antes de que el primer libro de la serie E nombre del viento fuese publicado en el año 2007. Obtuvo muy buenas críticas y se convirtió en un éxito de ventas. En españa fue publicado en el año 2009.';
        $author1->author_img = 'patrickrothfuss.jpeg';
        
        $author2 = R::Dispense ( 'author' );
        $author2->author_fullname = 'Isabel Allende';
        $author2->author_desc = 'Isabel Allende Llona (Lima, Perú, 2 de agosto de 1942) es una escritora chilena, miembro de la Academia Estadounidense de las Artes y las Letras desde 2004. Obtuvo el Premio Nacional de Literatura de su país en 2010. Autora de superventas, la tirada total de sus libros alcanza 57 millones de ejemplares y sus obras han sido traducidas a 35 idiomas. Es considerada la escritora viva de lengua española más leída del mundo';
        $author2->author_img = 'isabelallende.jpeg';
        
        $author3 = R::Dispense ( 'author' );
        $author3->author_fullname = 'Noah Gordon';
        $author3->author_desc = 'En un piso en Providence Street en Worcester, Massachusetts, en el Día del Armisticio, la esposa de Robert Gordon, Rose, dio a luz en el hogar a su segundo hijo. Fui llamado Noah en la memoria del padre de mi madre, Noah Melnikoff, que había muerto sólo unos meses antes. Él había sido un encuadernador y, a decir de todos, un hombre maravilloso. Su viuda, mi abuela, Sarah Melnikoff, vivió con mi familia durante los próximos 35 años, y era como una segunda madre para mí.';
        $author3->author_img = 'noahgordon.jpg';
        
        $author4 = R::Dispense ( 'author' );
        $author4->author_fullname = 'Paulo Coelho';
        $author4->author_desc = 'Es uno de los escritores y novelista más leídos del mundo con más de 150 millones de libros vendidos en más de 150 países (224 territorios), traducidos a 80 lenguas. Desde octubre de 2002 es miembro de la Academia Brasileña de las Letras. Ha recibido destacados premios y reconocimientos internacionales, como la prestigiosa distinción Chevalier de L\'Ordre National de La Legion d\'Honneur del gobierno francés, la Medalla de Oro de Galicia y el premio Crystal Award que concede el Foro Económico Mundial, entre muchos otros premios que ha obtenido gracias a su gran éxito. Además de recibir destacados premios y menciones internacionales, en la actualidad es consejero especial de la Unesco para el programa de convergencia espiritual y diálogos interculturales así como Mensajero de la Paz de Naciones Unidas.';
        $author4->author_img = 'paulocoelho.jpeg';
        
        
        // Create authorstate
        $authorstate1 = R::Dispense ( 'authorstate' );
        $authorstate1->authorstate_name = 'Available';
        
        $authorstate2 = R::Dispense ( 'authorstate' );
        $authorstate2->authorstate_name = 'Pending';
        
        $authorstate3 = R::Dispense ( 'authorstate' );
        $authorstate3->authorstate_name = 'Not Available';
        
        // ONE TO MANY RELATIONSHIP
        
        // Introducir Roles de los usuarios
        $user_role3->ownUserList [] = $user1;
        $user_role2->ownUserList [] = $user2;
        $user_role1->ownUserList [] = $user3;
        $user_role3->ownUserList [] = $user4;
        $user_role3->ownUserList [] = $user5;
        $user_role3->ownUserList [] = $user6;
        
        
        // Introducir Estados de los usuarios
        $user_state1->ownUserList [] = $user1;
        $user_state1->ownUserList [] = $user2;
        $user_state1->ownUserList [] = $user3;
        $user_state1->ownUserList [] = $user4;
        $user_state1->ownUserList [] = $user5;
        $user_state1->ownUserList [] = $user6;
        
        //Introducir Lista para usuario
        $listbook1->ownUserList [] = $user1;
        $listbook2->ownUserList [] = $user2;
        $listbook3->ownUserList [] = $user3;
        $listbook4->ownUserList [] = $user4;
        $listbook5->ownUserList [] = $user5;
        $listbook6->ownUserList [] = $user6;
        
        // Introducir Estados de los libros
        $bookstate1->ownBookList [] = $book1;
        $bookstate1->ownBookList [] = $book2;
        $bookstate1->ownBookList [] = $book3;
        $bookstate1->ownBookList [] = $book4;
        $bookstate1->ownBookList [] = $book5;
        
        // Introducir Estados de los autores
        $authorstate1->ownAuthorList [] = $author1;
        $authorstate1->ownAuthorList [] = $author2;
        $authorstate1->ownAuthorList [] = $author3;
        $authorstate1->ownAuthorList [] = $author4;
        
        //Introducir las valoraciones del usuario
        $listbook1->ownValuationList [] = $valuation1;
        $listbook2->ownValuationList [] = $valuation2;
        $listbook2->ownValuationList [] = $valuation3;
        $listbook3->ownValuationList [] = $valuation4;
        $listbook3->ownValuationList [] = $valuation5;
        $listbook5->ownValuationList [] = $valuation6;
        $listbook5->ownValuationList [] = $valuation7;
        $listbook5->ownValuationList [] = $valuation8;
        $listbook5->ownValuationList [] = $valuation9;
        $listbook5->ownValuationList [] = $valuation10;
        $listbook4->ownValuationList [] = $valuation11;
        $listbook4->ownValuationList [] = $valuation12;
        $listbook4->ownValuationList [] = $valuation13;
        $listbook4->ownValuationList [] = $valuation14;
        $listbook4->ownValuationList [] = $valuation15;
        $listbook6->ownValuationList [] = $valuation16;
        $listbook6->ownValuationList [] = $valuation17;
        $listbook6->ownValuationList [] = $valuation18;
        $listbook6->ownValuationList [] = $valuation19;
        $listbook6->ownValuationList [] = $valuation20;
        
        
        
        //Introducir los libros que son valorados
        $book1->ownValuationList [] = $valuation1;
        $book1->ownValuationList [] = $valuation2;
        $book2->ownValuationList [] = $valuation3;
        $book3->ownValuationList [] = $valuation4;
        $book5->ownValuationList [] = $valuation5;
        $book1->ownValuationList [] = $valuation6;
        $book2->ownValuationList [] = $valuation7;
        $book3->ownValuationList [] = $valuation8;
        $book4->ownValuationList [] = $valuation9;
        $book5->ownValuationList [] = $valuation10;
        $book1->ownValuationList [] = $valuation11;
        $book2->ownValuationList [] = $valuation12;
        $book3->ownValuationList [] = $valuation13;
        $book4->ownValuationList [] = $valuation14;
        $book5->ownValuationList [] = $valuation15;
        $book1->ownValuationList [] = $valuation16;
        $book2->ownValuationList [] = $valuation17;
        $book3->ownValuationList [] = $valuation18;
        $book4->ownValuationList [] = $valuation19;
        $book5->ownValuationList [] = $valuation20;
        
        
        // MANY-TO-MANY RELATIONSHIP
        
        // Introducir género de los libros
        $genrebook1->sharedBookList [] = $book1;
        $genrebook3->sharedBookList [] = $book1;
        $genrebook4->sharedBookList [] = $book1;
        $genrebook5->sharedBookList [] = $book1;
        $genrebook2->sharedBookList [] = $book2;
        $genrebook1->sharedBookList [] = $book3;
        $genrebook3->sharedBookList [] = $book3;
        $genrebook4->sharedBookList [] = $book3;
        $genrebook5->sharedBookList [] = $book3;
        $genrebook1->sharedBookList [] = $book4;
        $genrebook1->sharedBookList [] = $book5;
        $genrebook4->sharedBookList [] = $book5;
        
        
        // Introducir los libros que hay en cada lista
        $book1->sharedListbookList [] = $listbook1;
        $book1->sharedListbookList [] = $listbook2;
        $book2->sharedListbookList [] = $listbook2;
        $book3->sharedListbookList [] = $listbook3;
        $book5->sharedListbookList [] = $listbook3;
        $book1->sharedListbookList [] = $listbook4;
        $book2->sharedListbookList [] = $listbook4;
        $book3->sharedListbookList [] = $listbook4;
        $book4->sharedListbookList [] = $listbook4;
        $book5->sharedListbookList [] = $listbook4;
        $book1->sharedListbookList [] = $listbook5;
        $book2->sharedListbookList [] = $listbook5;
        $book3->sharedListbookList [] = $listbook5;
        $book4->sharedListbookList [] = $listbook5;
        $book5->sharedListbookList [] = $listbook5;
        $book1->sharedListbookList [] = $listbook6;
        $book2->sharedListbookList [] = $listbook6;
        $book3->sharedListbookList [] = $listbook6;
        $book4->sharedListbookList [] = $listbook6;
        $book5->sharedListbookList [] = $listbook6;
        
        
        // Los autores de cada libro
        $author1->sharedBookList [] = $book1;
        $author1->sharedBookList [] = $book3;
        $author2->sharedBookList [] = $book2;
        $author3->sharedBookList [] = $book4;
        $author4->sharedBookList [] = $book5;
        
        $comment1 = R::Dispense ( 'comment' );
        $comment1->num_comment = 1;
        $comment1->text = 'Este libro me encanta, es una maravilla';
        $comment1->date_publish = R::isoDateTime();
        $comment1->sharedBookList[] = $book1;
        $comment1->sharedUserList[] = $user1;
        
        $comment2 = R::Dispense ( 'comment' );
        $comment2->num_comment = 2;
        $comment2->text = 'Este libro me sigue gustando, yo flipo';
        $comment2->date_publish = R::isoDateTime();
        $comment2->sharedBookList[] = $book1;
        $comment2->sharedUserList[] = $user1;
        
        $comment3 = R::Dispense ( 'comment' );
        $comment3->num_comment = 1;
        $comment3->text = 'Guay';
        $comment3->date_publish = R::isoDateTime();
        $comment3->sharedBookList[] = $book2;
        $comment3->sharedUserList[] = $user2;
        
        
        
        // STORE ONE-TO-ONE RELATIONSHIP
        
        // guardamos los usuarios
        R::store ( $user1 );
        R::store ( $user2 );
        R::store ( $user3 );
        R::store ( $user4 );
        R::store ( $user5 );
        R::store ( $user6 );
        
        // guardamos las listas de libros
        R::store ( $listbook1 );
        R::store ( $listbook2 );
        R::store ( $listbook3 );
        R::store ( $listbook4 );
        R::store ( $listbook5 );
        R::store ( $listbook6 );
        
        // STORE ONE-TO-MANY RELATIONSHIP
        
        // guardamos los roles de usuario
        R::store ( $user_role1 );
        R::store ( $user_role2 );
        R::store ( $user_role3 );
        
        // guardamos los estados de usuario
        R::store ( $user_state1 );
        R::store ( $user_state2 );
        R::store ( $user_state3 );
        
        // guardamos los estados de libros
        R::store ( $bookstate1 );
        R::store ( $bookstate2 );
        R::store ( $bookstate3 );
        
        // guardamos los estados de los usuarios
        R::store ( $authorstate1 );
        R::store ( $authorstate2 );
        R::store ( $authorstate3 );
        
        // guardamos las valoraciones de los usuario
        R::store ($valuation1);
        R::store ($valuation2);
        R::store ($valuation3);
        R::store ($valuation4);
        R::store ($valuation5);
        R::store ($valuation6);
        R::store ($valuation7);
        R::store ($valuation8);
        R::store ($valuation9);
        R::store ($valuation10);
        R::store ($valuation11);
        R::store ($valuation12);
        R::store ($valuation13);
        R::store ($valuation14);
        R::store ($valuation15);
        R::store ($valuation16);
        R::store ($valuation17);
        R::store ($valuation18);
        R::store ($valuation19);
        R::store ($valuation20);
        
        
        // STORE MANY-TO-MANY RELATIONSHIP
        
        // Guardamos todos los géneros juntos
        R::storeAll ( [ 
                $genrebook1,
                $genrebook2,
                $genrebook3,
                $genrebook4,
                $genrebook5 
        ] );
        
        // Guardamos todos los libros juntos
        R::storeAll ( [ 
                $book1,
                $book2,
                $book3,
                $book4,
                $book5 
        ] );
        
        // Guardamos todos los autores juntos
        R::storeAll ( [ 
                $author1,
                $author2,
                $author3,
                $author4 
        ] );
        
        
        R::store ( $comment1 );
        R::store ( $comment2 );
        R::store ( $comment3 );

        // Freeze the database.
        R::freeze ( TRUE );
        
        // END
        echo 'Database base created';
    }
    private function deletePreviousData() {
        R::nuke ();
    }
    private function setDebugMode($debugMode) {
        R::debug ( $debugMode );
    }
}