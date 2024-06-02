<x-layouts.general>
    <x-slot name="title">File uploader</x-slot>
    <x-slot name="meta">
        <meta name="description" content="File uploader">
    </x-slot>
    <!-- User Settings Page -->
    <div class="techwave_fn_user_settings_page">
        <!-- Page Title -->
        <div class="techwave_fn_pagetitle">
            <h2 class="title">Encrypt proccsser</h2>
            <a href="/login" class="techwave_fn_button" style="position: absolute;top:35px;right: 25px">Go to project</a>

        </div>
        <!-- !Page Title -->

        <div class="container small">
            <div class="techwave_fn_user_settings">
                <form>
                    <div class="user__settings">
                        <div class="settings_left" style="width:100%;max-width: 100%">

                            <!-- Upload Shortcode -->
                            <label id="uploadLabel" class="fn__upload">
                                <span class="upload_content">
                                    <img src="{{ URL::asset('build/svg/upload.svg') }}" alt="" class="fn__svg">
                                    <span class="title">Drag & Drop a Image</span>
                                    <span class="fn__lined_text">
                                        <span class="line"></span>
                                        <span class="text">Or</span>
                                        <span class="line"></span>
                                    </span>
                                    <span class="title">Browse</span>
                                    <span class="desc">Supports JPG, JPEG, and PNG</span>
                                </span>
                                <span class="upload_preview">
                                    <a href="javascript:void(0);" class="fn__closer fn__icon_button">
                                        <img src="{{ URL::asset('build/svg/close.svg') }}" alt="" class="fn__svg">
                                    </a>
                                    <img src="#" alt="" class="preview_img">
                                </span>

{{--                                <input type="file" accept="image/*">--}}
                            </label>
                            <!-- !Upload Shortcode -->
                            <div class="item d-none">
                                <div class="input_item">
                                    <label class="input_label" for="name">Crypt code</label>
                                    <input class="input" type="text" id="cryptCode" placeholder="Anything here" value=""/>
                                </div>
                                <a style="margin-top: 20px;width: 100%" href="javascript:void(0)" class="techwave_fn_button" id="uploadStart" type="button">Process</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="/build/js/plupload-2.3.9/js/plupload.full.min.js"></script>

        <script type="text/javascript">
            function uploaderInit()
            {
                uploader = new plupload.Uploader({
                    browse_button: 'uploadLabel',
                    chunk_size: '200kb',
                    max_retries: 3,
                    url: '{{route('public.upload')}}',
                    autostart: true,
                    drop_element: document.querySelector('.fn__upload'),
                });
                uploader.bind('FilesAdded', async function (up, file) {
                    document.querySelector('.item.d-none').classList.remove('d-none');
                    document.querySelector('#uploadLabel').classList.add('d-none');
                })

                uploader.bind('beforeUpload', function(up, file){
                    uploader.settings.multipart_params = {
                        // pin : document.querySelector('#pin').value,
                        crypt : document.querySelector('#cryptCode').value,
                        file : file,
                    };
                });

                // uploader.bind('UploadProgress', function(uploader, file){
                //     if(file.percent<=25) {
                //         console.log(file.percent);
                //         $('#uploadForm').css({'border': 'solid 5px white',
                //             'border-left': 'solid 5px lime;'});
                //
                //
                //     }
                //     else {if(file.percent<=50) {
                //         console.log(1);
                //         $('#uploadForm').css({'border': 'solid 5px white;',
                //             'border-left': 'solid 5px lime;',
                //             'border-bottom': 'solid 5px lime;'});
                //     }
                //     }
                // });

                uploader.bind('FileUploaded', function(up, file, body) {
                    let res = JSON.parse(body.response);
                    document.querySelector('#uploadStart').setAttribute('href', res.path)
                    document.querySelector('#uploadStart').removeEventListener('click', uploadStart);
                    document.querySelector('.input_item').classList.add('d-none')
                    console.log(up);

                })
                uploader.bind('Error', function (up, error) {
                    console.log(error);
                })
                uploader.init()
            }

            document.querySelector('#uploadStart').addEventListener('click',uploadStart);
            uploaderInit();

            function uploadStart()
            {
                uploader.start();
            }
        </script>
    </div>

    <!-- !User Settings Page -->
</x-layouts.general>
