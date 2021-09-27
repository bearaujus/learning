@extends('layouts/main')

@section('container')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">{{__('about/form.title')}}</h1>
    <hr>
    <div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quibusdam exercitationem modi
            iure veritatis
            culpa, doloremque quod sapiente provident inventore, reprehenderit dolores accusantium ipsam aliquam aut
            beatae
            sequi cum explicabo molestias maxime saepe architecto! Impedit iste excepturi incidunt, rerum facere nostrum
            saepe provident nobis dolore eveniet! Harum provident recusandae id itaque beatae repudiandae doloremque
            saepe
            dignissimos perspiciatis reiciendis quos ex quam at illo necessitatibus nemo dolor nulla hic, sequi nihil?
        </p>
        <div class="form-control mt-3 mb-3">
            <table style="margin-right: auto; margin-left: auto">
                <td style="text-align: right">
                    <img src="img/profile.gif" alt="err" width="200" class="img-thumbnail rounded-circle me-5">
                </td>
                <td style="text-align: left">
                    <div>
                        <div class="form-control-dark mb-3">
                            <h3>Haryo Bagas Assyafah</h3>
                        </div>
                        <div class="form-control-dark">
                            Linkedin :
                            <a href="https://www.linkedin.com/in/bearaujus/" target="_blank"
                                style="color: black">https://www.linkedin.com/in/bearaujus/</a>
                        </div>
                        <div class="form-control-dark">
                            Github :
                            <a href="https://github.com/bearaujus" target="_blank"
                                style="color: black">https://github.com/bearaujus</a>
                        </div>
                    </div>
                </td>
            </table>
        </div>
        <p>{{__('about/form.desc')}} <a href="https://github.com/bearaujus/learning/tree/main/php/4_laravel"
                style="color: white" target="_blank">link</a>.</p>
    </div>
</div>
@endsection