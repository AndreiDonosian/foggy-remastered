<ul class="fn__model_items ">
    @if(!empty($files))
        @foreach($files as $file)
            <li class="fn__model_item" id="<?=$file['randId']?>">
                <div class="item">
                    <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                        <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                        <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                    </a>
                    <div class="img abs_item">
                        <img src="{{$file['public_path']}}" alt="">
                        <div class="all_options">
                            <div class="fn__icon_options medium_size">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Original File</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Encrypted File</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fn__icon_options medium_size">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Create Download link</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Create download link (encrypted)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fn__icon_options medium_size">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <span class="dots"></span>
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li class="high_priorety">
                                            <a href="#" data-parent-id="<?=$file['randId']?>" data-type="delete" data-url="{{route('file.delete', ['pin'=>$pin, 'name'=>$file['meta']['name']])}}" class="fn__report">Delete Image</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item__info">
                        <h3 class="title">{{$file['meta']['name']}}</h3>
                        <p class="desc">{{$file['meta']['type']}}</p>
                    </div>
                    <div class="item__author">
                        <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                        <h3 class="author_name">{{$file['meta']['size']}}</h3>
                    </div>
                </div>
            </li>
        @endforeach
    @endif

    <li id="uploadForm" class="fn__model_item new movingBorder">
        <label id="uploadLabel" class="fn__upload">
                                <span class="upload_content">
                                    <img src="/build/svg/upload.svg" />
                                    <span class="title">Drag &amp; Drop a File</span>
                                    <span class="fn__lined_text">
                                        <span class="line"></span>
                                        <span class="text">Or</span>
                                        <span class="line"></span>
                                    </span>
                                    <span class="title">Browse</span>
                                    <span class="desc">Supports Everything</span>
                                </span>
            <span class="upload_preview">
                                    <a href="javascript:void(0);" class="fn__closer fn__icon_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 383.3 383.3" style="enable-background:new 0 0 383.3 383.3;" xml:space="preserve" class="fn__svg replaced-svg">
<g>
	<path d="M15,383.3c-1.1-0.5-2.2-1-3.3-1.4C0.2,377.1-3.6,362.9,4,353.1c1.1-1.5,2.5-2.8,3.8-4.1c51.3-51.3,102.7-102.7,154-154   c1-1,2.4-1.7,3.9-2.7c-1.8-1.9-2.8-3-3.8-4C110.1,136.6,58.5,84.9,6.8,33.3c-5.2-5.2-7.9-11.2-6.3-18.5C3.7,0.7,20.2-4.7,31.1,4.7   c1.2,1.1,2.3,2.2,3.5,3.4C85.7,59.3,136.9,110.4,188,161.6c1.1,1.1,2,2.3,3.2,3.8c1.4-1.3,2.5-2.3,3.5-3.3   C246.4,110.3,298.1,58.7,349.8,7c6-6,12.7-8.6,21-5.8c6.7,2.2,10.2,7.5,12.5,13.9c0,2.5,0,5,0,7.5c-1.8,5.6-5.6,9.8-9.7,13.8   C322.8,87,272.1,137.7,221.3,188.4c-1,1-2,2.1-3.4,3.5c1.4,1.2,2.6,2.1,3.7,3.2c50.5,50.5,101.1,101.1,151.7,151.6   c4.2,4.2,8.1,8.4,10,14.1c0,2.5,0,5,0,7.5c-2.4,7.6-7.4,12.6-15,15c-2.5,0-5,0-7.5,0c-5.6-1.8-9.7-5.7-13.8-9.7   c-50.7-50.8-101.4-101.5-152.1-152.2c-1-1-2.1-2-3.7-3.5c-1.2,1.5-2,2.8-3,3.8C137.5,272.2,86.9,322.9,36.3,373.5   c-4.1,4.1-8.2,7.9-13.8,9.7C20,383.3,17.5,383.3,15,383.3z"></path>
</g>
</svg>
                                    </a>
                                    <img src="#" alt="" class="preview_img">
                                </span>
        </label>
        <form id="_upload" style="display:none;">
            @csrf
            <input type="hidden" id="pin" value="{{$pin}}">
            <input type="file" id="uploadFile" accept="*">
        </form>
    </li>

</ul>