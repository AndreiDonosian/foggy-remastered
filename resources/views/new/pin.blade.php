<x-layouts.auth wraper_class="fn__has_sidebar">
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Dashboard">
    </x-slot>
    <x-slot name="other">
        <!-- Report -->
        <x-report />
        <!-- !Report -->
    </x-slot>
    <!-- Image Generation Page -->
    <div class="techwave_fn_image_generation_page">
        <div class="generation__page">

            <!-- Generation Header -->
            <div class="generation_header">
                <div class="header_top">
                    <h1 class="title">Pin gather</h1>
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

        document.querySelector('#generate_it').addEventListener('click', async event=>{
            event.preventDefault();
            if(!document.querySelector('#fn__include_textarea').value) {
                return;
            }
            await fetch("/pin-gather?pin="+document.querySelector('#fn__include_textarea').value, {
                method: "GET",
            })
                .then(async (response) => {
                    document.querySelector('.generation_history').innerHTML = await response.text();
                    document.querySelector('.generation_header').style.zIndex = -1;
                    document.querySelector('.generation_header').style.overflow = 'hidden';
                    uploaderInit();
                    FrenifyTechWave.report()

                    let tInterHide = setInterval(function (){
                        document.querySelector('.generation_header').style.height = (staticHeight-=10)+'px';
                    }, 1)
                });
        })

        function uploaderInit()
        {
            uploader = new plupload.Uploader({
                browse_button: 'uploadLabel',
                chunk_size: '200kb',
                max_retries: 3,
                url: '/file/upload',
                autostart: true,
                drop_element: document.querySelector('.fn__model_item.new'),
            });
            uploader.bind('FilesAdded', async function (up, file) {
                var _sync = await fetch('/ajax/credits-check?size='+file[0].size).then(async function (response){
                    const _body = JSON.parse(await response.text());
                    console.log(_body);
                    if(_body.error) {
                        alert(_body.message);
                        return;
                    } else {
                        uploader.start();
                    }
                })
            })
            uploader.bind('beforeUpload', function(up, file){
                uploader.settings.multipart_params = {
                    pin : document.querySelector('#pin').value,
                    // crypt : document.querySelector('#cryptCode').value,
                    file : file,
                };
            });

            uploader.bind('UploadProgress', function(uploader, file){
                if(file.percent<=25) {
                    console.log(file.percent);
                    $('#uploadForm').css({'border': 'solid 5px white',
                        'border-left': 'solid 5px lime;'});


                }
                else {if(file.percent<=50) {
                    console.log(1);
                    $('#uploadForm').css({'border': 'solid 5px white;',
                        'border-left': 'solid 5px lime;',
                        'border-bottom': 'solid 5px lime;'});
                    }
                }
            });

            uploader.bind('FileUploaded', function(up, file) {
                let _mb = parseInt(document.querySelector('.token_summary .count').textContent);
                document.querySelector('.token_summary .count').textContent = (_mb-parseInt(file.size/1024/1024))+ " MB";
                document.querySelector('#generate_it').click();
            })
            uploader.bind('Error', function (up, error) {
                console.log(error);
            })
            uploader.init()
        }
        var uploader = 0;
        var files = [];
    </script>
    <script type="text/javascript" src="/build/js/plupload-2.3.9/js/plupload.full.min.js"></script>
    <!-- !Image Generation Page -->
</x-layouts.auth>