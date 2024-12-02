@extends('frontend.layouts.app')

@section('content')

    <section class="banner-style-one">
        <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/pattren-3.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="banner-details">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="gap contact-form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" >
                    <div class="data">
                        <h3>Solicita tu estudio gratuito</h3>
                        <h3>¿Tienes alguna duda?</h3>
                        <form method="post" action="{{ route('frontend.sendMail') }}">
                            @csrf
                            @if(session('message_mail'))
                                <div class="alert alert-success contact__msg" role="alert">
                                    <b>{{ session('message_mail') }}</b>
                                </div>
                                <br>
                            @endif
                            @if(session('error_message_mail'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error_message_mail') }}
                                </div>
                                <br>
                            @endif
                            <div class="row g-0">
                                <input type="text" class="form-control" id="exampleInputText1" name="name"  placeholder="Nombre y apellidos" required>
                            </div>
                            <div class="row g-0">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
                            </div>
                            <div class="row g-0">
                                <input type="text" class="form-control" id="exampleInputPassword1" name="poblacio" placeholder="Población" required>
                            </div>
                            <div class="row g-0">
                                <textarea placeholder="Mensaje" name="message" required></textarea>
                            </div>
                            <button type="submit" class="theme-btn">Enviar<i class="fa-solid fa-angles-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1" >
                    <div class="bio">
                        <div class="data">
                            <h3>Horarios</h3>
                            <p>
                                Horario atención al cliente:<br>
                                <br>Lunes a Viernes: 09:00 a 18:00
                                Sábado y Domingo: Cerrado
                            </p>
                        </div>
                    </div>
                    <div class="info">
                        <ul class="contact">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79" height="94" viewBox="0 0 79 94"> <defs> <clipPath id="clip-location_Bd"> <rect width="79" height="94"/> </clipPath> </defs> <g id="location_Bd" data-name="location B" clip-path="url(#clip-location_B)"> <path id="Path_1gfhjfjytkd" data-name="Path 1" d="M962.855,575.375a3,3,0,0,1-2.1-.861l-26.263-25.826c-11.03-11.993-13.791-27.653-7.492-42a38.334,38.334,0,0,1,34.959-23.117l1.346.009c15.262,0,27.868,8.452,33.722,22.609,6.152,14.878,3.046,31.554-7.912,42.485-.528.555-24.064,25.75-24.064,25.75a3,3,0,0,1-2.129.951Zm-.9-85.8A31.924,31.924,0,0,0,932.49,509.1c-5.313,12.1-2.954,25.342,6.31,35.419l23.963,23.559c15.027-16.085,20.179-21.585,22.274-23.488l-.164-.165c9.233-9.209,11.825-23.318,6.605-35.944a29.677,29.677,0,0,0-28.177-18.9Z" transform="translate(-922.725 -482.15)"/> <path id="Path_24cr2r" data-name="Path 2d" d="M15,6a9,9,0,1,0,9,9,9.01,9.01,0,0,0-9-9m0-6A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(25 26)"/> </g> </svg>
                                <div>
                                <h3>Dirección:</h3>
                                    <p>C/ Sant Josep Oriol, 44</p>
                                    <p>08911, Badalona</p>
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62"> <defs> <clipPath id="fsddffsdfsdfsdf"> <rect width="40" height="62"/> </clipPath> </defs> <g id="Mobsfddfsdile" clip-path="url(#fsddffsdfsdfsdf)"> <path id="Pafdth_1dfhgfhgjjdfhgddffgdfgdfgdfgdfgd" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/> <path id="Padfth_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/> </g></svg>
                                <div>
                                <h3>Teléfono:</h3>
                                    <p><a href="tel:+34632240022" style="color:#b7b7b7">632 240 022</a></p>
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102" height="93" viewBox="0 0 102 93"> <defs> <clipPath id="clip-Emaidl_Bhf"> <rect width="102" height="93"/> </clipPath> </defs> <g id="Emaidfgsdl_B" data-name="Email B" clip-path="url(#clip-Email_Bsdfhf)"> <path id="Pathsdf_1" data-name="Path 1" d="M969.85,550.4,927.766,528.2l2.8-5.307,39.229,20.7,37.712-20.677,2.885,5.261Z" transform="translate(-918 -492)"/> <path id="Path_2dfsdsffgs" data-name="Path 2" d="M969.562,494.385l48.391,25.361,0,1.818c-.023,17.272-.043,42.814-.012,47.124l.012.024v.709c0,5.426-1.516,9.425-4.508,11.885a10.4,10.4,0,0,1-6.575,2.344l-75.5-.016c-3.557.071-5.965-.931-7.717-2.752-2.4-2.5-3.517-6.391-3.317-11.577l.065-1.194c.116-5.315.029-29.954-.067-46.535l-.011-1.842Zm42.386,28.988-42.411-22.227-43.2,22.238c.189,32.939.239,42.8-.143,46.148l.13.005c-.168,4.351.8,6.309,1.645,7.185a3.342,3.342,0,0,0,2.458.984l76.043-.071a4.65,4.65,0,0,0,3.16-.963c1.517-1.248,2.319-3.754,2.319-7.25h.09C1011.893,566.689,1011.9,557.566,1011.947,523.373Z" transform="translate(-918 -492)"/> </g> </svg>
                                <div>
                                    <h3>Email:</h3>
                                    <p><a href="mailto:info@solarcat.es" style="color:#b7b7b7">info@solarcat.es</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="social-medias">
                            <li>
                                <a class="tw" href="javascript:void(0)">
                                    <p>Instagram</p>
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="fb" href="javascript:void(0)">
                                    <p>Facebook</p>
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-faqs">
        <div class="heading">
            <figure>
                <img src="{{ asset('frontend/assets/images/heading-icon.png') }}" alt="Solarcat">
            </figure>
            <span>Ponte en contacto con nosotros</span>
            <h2>Localización</h2>
        </div>
    </section>

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23922.92103676448!2d2.220666279101562!3d41.45299540000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bb044aaaf2f1%3A0x4a19a7fba9a7bcf9!2sSolarcat!5e0!3m2!1ses!2ses!4v1732014815172!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection