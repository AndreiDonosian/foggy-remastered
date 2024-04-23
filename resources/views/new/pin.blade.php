<x-layouts.auth wraper_class="fn__has_sidebar">
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Dashboard">
    </x-slot>

    <!-- Image Generation Page -->
    <div class="techwave_fn_image_generation_page">
        <div class="generation__page">

            <!-- Generation Header -->
            <div class="generation_header">
                <div class="header_top">
                    <h1 class="title">Pin gather</h1>
                    <div class="filter__upscaled">
                        <label class="fn__checkbox">
                            <input type="checkbox" id="showContent">Show content
                            <span class="checkmark"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 408.8 294.1" style="enable-background:new 0 0 408.8 294.1;" xml:space="preserve" class="fn__svg replaced-svg">
<g>
    <path d="M408.8,36.8c-2,10.1-8.3,17.4-15.4,24.5C319.6,135,245.8,208.8,172.1,282.6c-10,10-21.5,14.3-35.1,9.5   c-5-1.7-9.9-4.9-13.6-8.6C85.6,246.1,48.1,208.6,10.6,171c-15.1-15.2-13.9-37,2.6-49.9c12.8-10,30.9-8.2,43.7,4.6   c28.9,28.9,57.8,57.8,86.6,86.7c1.1,1.1,1.8,2.6,3.4,4.9c1.7-2.3,2.4-3.6,3.4-4.6c67.1-67.1,134.2-134.2,201.2-201.3   c9.7-9.7,21-13.8,34.5-9.6c11.8,3.7,18.8,12,21.9,23.8c0.2,0.9,0.5,1.7,0.8,2.6C408.8,31,408.8,33.9,408.8,36.8z"></path>
</g>
</svg>
                        </label>
                    </div>
                </div>
                <style>
                    .pin-button {
                        margin:10px;
                        cursor: pointer;
                    }
                    .include_area {
                        text-align: center;
                    }
                    .pin-handler{
                        padding-top:20px;display: flex;width: auto;margin: 0 auto;max-width: 290px;
                    }
                </style>
                <div class="header_bottom">
                    <div class="include_area">
                        @csrf
                        <input type="search" id="fn__include_textarea" value=""/>

                        <div class="pin-handler">
                            <div>
                                <button class="techwave_fn_button pin-button" data-value="1">1</button>
                                <button class="techwave_fn_button pin-button" data-value="2">2</button>
                                <button class="techwave_fn_button pin-button" data-value="3">3</button>
                            </div>
                            <div>
                                <button class="techwave_fn_button pin-button" data-value="4">4</button>
                                <button class="techwave_fn_button pin-button" data-value="5">5</button>
                                <button class="techwave_fn_button pin-button" data-value="6">6</button>
                            </div>
                            <div>
                                <button class="techwave_fn_button pin-button" data-value="7">7</button>
                                <button class="techwave_fn_button pin-button" data-value="8">8</button>
                                <button class="techwave_fn_button pin-button" data-value="9">9</button>
                            </div>

                        </div>
                        <script type="text/javascript">
                            document.querySelectorAll('.pin-button').forEach(e=>{
                                e.addEventListener('click', f=>{
                                    document.querySelector('#fn__include_textarea').value += f.target.getAttribute('data-value')
                                })
                            })
                        </script>
                    </div>

                    <div class="generate_section">
                        <a id="generate_it" href="javascript:void(0);" class="techwave_fn_button"><span>Show data</span></a>
                    </div>
                </div>
            </div>
            <!-- !Generation Header -->
            <div class="container" style="margin-top:20px">
                <div class="generation_history"></div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        let staticHeight = 442;

        document.querySelector('#generate_it').addEventListener('click', event=>{
            event.preventDefault();
            if(!document.querySelector('#fn__include_textarea').value) {
                return;
            }
            fetch("/pin-gather?pin="+document.querySelector('#fn__include_textarea').value+'&contentHidden='+(document.querySelector('#showContent').checked?0:1), {
                method: "GET",
            })
                .then(async (response) => {
                    document.querySelector('.generation_history').innerHTML = await response.text();
                    document.querySelector('.generation_header').style.zIndex = -1;
                    document.querySelector('.generation_header').style.overflow = 'hidden';
                    let tInterHide = setInterval(function (){
                        document.querySelector('.generation_header').style.height = (staticHeight-=4)+'px';
                        if(staticHeight<=0) {
                            document.querySelector('.filter__upscaled').style.display = 'none';
                            clearInterval(tInterHide);
                        }
                    }, 1)
                });
        })
        document.addEventListener('click', async e=>{
            if(e.target.closest('.fn__upload')) {
                if(document.querySelectorAll('.fn__upload textarea').length==0) {
                    document.querySelector('.fn__upload').innerHTML = '<label>Please use simple(or not) password to encrypt this file</label><textarea id="cryptCode" rows="1"></textarea> <textarea class="fn__hidden_textarea" rows="1" tabindex="-1"></textarea><a href="javascript:void(0);" id="sendFile" class="techwave_fn_button"><span>Save</span></a>';

                }
            }
            if(e.target.id =='sendFile') {
                if(typeof uploader=='number') {
                    uploader = new plupload.Uploader({
                        browse_button: 'sendFile',
                        chunk_size: '200kb',
                        max_retries: 3,
                        url: '/pin-submit',
                        autostart: true,
                        drop_element: document.querySelector('.fn__model_item.new'),
                    });
                    uploader.bind('FilesAdded', function (up, file) {
                        console.log(file)
                        console.log(uploader.files)
                        uploader.start();
                    })
                    uploader.bind('beforeUpload', function(up, file){
                        uploader.settings.multipart_params = {
                            pin : document.querySelector('#pin').value,
                            crypt : document.querySelector('#cryptCode').value,
                            file : file,
                        };
                    })
                    uploader.bind('FileUploaded', function(up, file) {
                        document.querySelector('#generate_it').click();
                    })
                    uploader.bind('Error', function (up, error) {
                        alert(error);
                    })
                    uploader.init()
                }


                // document.querySelector('#uploadFile').click();
                // document.querySelector('#uploadFile').addEventListener('change', function (e){
                //     // console.log(e.target.)
                //     uploader.addFile(e.target.files[0]);
                //     uploader.start();
                // });

            }
        })
        var uploader = 0;
        var files = [];
    </script>
    <script type="text/javascript" src="/build/js/plupload-2.3.9/js/plupload.full.min.js"></script>
    <!-- !Image Generation Page -->
</x-layouts.auth>
<div id="crypt-code" class="fn__preloader">
    <div class="wrapper"></div>
    <div class="text">Please provide crypt key for this file</div>
    <div>
        <textarea id="fn__include_textarea" rows="1"></textarea>
        <textarea class="fn__hidden_textarea" rows="1" tabindex="-1"></textarea>
    </div>

</div>